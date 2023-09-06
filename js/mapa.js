let pointsOfInterest = [];
var markers = [];
function showInfo(id){
    for(let i=1;i<=total;i++){
        $('#counter'+i).hide();
    }
    $('#counter'+id).show('slow');
}

function initMap(){
    provinciaSel = $('#provincias');
    provinciaSel.append($('<option></option>', {value: 'San Jose', text: 'San Jose'}));
    provinciaSel.append($('<option></option>', {value: 'Alajuela', text: 'Alajuela'}));
    provinciaSel.append($('<option></option>', {value: 'Cartago', text: 'Cartago'}));
    provinciaSel.append($('<option></option>', {value: 'Heredia', text: 'Heredia'}));
    provinciaSel.append($('<option></option>', {value: 'Limon', text: 'Limon'}));
    provinciaSel.append($('<option></option>', {value: 'Puntarenas', text: 'Puntarenas'}));
    provinciaSel.append($('<option></option>', {value: 'Guanacaste', text: 'Guanacaste'}));
    cantonSel = $('#cantones');

    for(let datMap of jsonData){
        if (datMap.principal == 'Y'){
            $('#provincias').val(datMap.provincia);
            cantonSel.append($('<option></option>', {value: datMap.canton, text: datMap.canton, selected: true}));
            var center = {
                lat: parseFloat(datMap.latitud),
                lng: parseFloat(datMap.longitud)
            };
            map = new google.maps.Map(document.getElementById('map'), {
                center: center,
                zoom: 15
            });

            var point = {
                name: datMap.nombre,
                provincia: datMap.provincia,
                canton: datMap.canton,
                position: {
                    lat: parseFloat(datMap.latitud),
                    lng: parseFloat(datMap.longitud)
                },
                photo: base_url + 'images/mapa/' + datMap.imagen,
                telefono: datMap.telefono,
                texto:datMap.texto,
                waze:datMap.waze
            };
        
            var marker = new google.maps.Marker({
                name:point.name,
                provincia:point.provincia,
                canton:point.canton,
                position: map.getCenter(),
                map: map,
                icon: {
                    url: point.photo,
                    scaledSize: new google.maps.Size(50, 50),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(25, 25)
                }
            });

            var content = '<h4 style="margin-top:1em;min-width:220px;max-width:220px;text-align:center;">' + point.name + '</h4>' +
                '<a href="'+point.waze+'"><img src="' + point.photo + '" alt="' + point.name + '" style="margin-left:22.5%;margin-right: 15%;"></a><br>'+
                '<p style="margin-top:2em;max-width:215px;">' + point.texto + ' - Telefono: ' + point.telefono + '</p>';
            
            var infoWindow = new google.maps.InfoWindow({
                content: content
            });
        
            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });

            markers.push(marker);
        }
    }

    for (let datMap of jsonData){
        if (datMap.principal == 'N'){
            var point = {
                name: datMap.nombre,
                provincia: datMap.provincia,
                canton: datMap.canton,
                position: {
                    lat: parseFloat(datMap.latitud),
                    lng: parseFloat(datMap.longitud)
                },
                photo: base_url + 'images/mapa/' + datMap.imagen,
                telefono: datMap.telefono,
                texto:datMap.texto,
                waze:datMap.waze
            };

            pointsOfInterest.push(point);
        }
    }

    pointsOfInterest.forEach(function(point) {
        var marker = new google.maps.Marker({
            name:point.name,
            provincia:point.provincia,
            canton:point.canton,
            position: point.position,
            map: map,
            icon: {
                url: point.photo,
                scaledSize: new google.maps.Size(50, 50),
                origin: new google.maps.Point(0, 0),
                anchor: new google.maps.Point(25, 25)
            }
        });

        var content = '<h4 style="margin-top:1em;min-width:220px;max-width:220px;text-align:center;">' + point.name + '</h4>' +
                '<a href="'+point.waze+'"><img src="' + point.photo + '" alt="' + point.name + '" style="margin-left:22.5%;margin-right: 15%;"></a><br>'+
                '<p style="margin-top:2em;max-width:215px;">' + point.texto + ' - Telefono: ' + point.telefono + '</p>';

        var infowindow = new google.maps.InfoWindow({
            content: content
        });

        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });

        markers.push(marker);
    });
}

$( "#nombre" ).on( "keyup", function(){
    if($(this).val() != '' && $(this).val() != undefined){
        $('.no_coincidence').css('display', 'none');
        if($(this).val().length > 2){
            hideInfoBlocks()
            var filteredMarkers = [];
            $('#servicios').val('');
    
            var selectCantones = $('#cantones');
            selectCantones.empty();
            selectCantones.append($('<option></option>', {value: '', text: 'Todos' }));
            $('#provincias').val('');
    
            for(let datMap of markers){
                if(datMap.name.toLowerCase().includes($(this).val().toLowerCase())){
                    filteredMarkers.push(datMap);
                }
            }
    
            if(filteredMarkers.length > 0) {
                map.setCenter(filteredMarkers[0].getPosition());
                showInfoBlocks(filteredMarkers[0].provincia);
            }else{
                noCoincidence();
            }
        }
    }
});

$('#provincias').on('change', function(){
    hideInfoBlocks();
    
    if($(this).val() != ''){

        $('#nombre').val('');
        let filteredMarkers = [];
        let valCant = [];
        var selectCantones = $('#cantones');
        selectCantones.empty();
    
        for(let datMap of markers){
            if(datMap.provincia == $(this).val()){
                filteredMarkers.push(datMap);
                if(!valCant.includes(datMap.canton)){
                    selectCantones.append($('<option></option>', {value: datMap.canton, text: datMap.canton }));
                    valCant.push(datMap.canton);
                }
            }
        }
        if (filteredMarkers.length > 0){
            map.setCenter(filteredMarkers[0].getPosition());
            showInfoBlocks(filteredMarkers[0].provincia);
        }else{
            noCoincidence();
        }
    }else{
        var selectCantones = $('#cantones');
        selectCantones.empty();
        selectCantones.append($('<option></option>', {value: '', text: 'Todos' }));
        showAllBlocks();
    }
});

$('#cantones').on('change', function(){
    hideInfoBlocks()
    $('#nombre').val('');
    let filteredMarkers = [];

    for(let datMap of markers){
        if(datMap.canton == $(this).val()){
            filteredMarkers.push(datMap);
        } 
    }
    if (filteredMarkers.length > 0) {
        map.setCenter(filteredMarkers[0].getPosition());
        showInfoBlocks(filteredMarkers[0].provincia);
    }else{
        noCoincidence();
    }
});

$('#servicios').on('change', function(){
    hideInfoBlocks()
    $('#nombre').val('');
    var filteredMarkers = [];
    var selectCantones = $('#cantones');
    selectCantones.empty();
    selectCantones.append($('<option></option>', {value: '', text: 'Todos' }));
    $('#provincias').val('');

    for(let datMap of markers){
        for(let serv of jsonServicios){
            if(serv.idServicio == $(this).val()){
                if(datMap.canton == serv.canton){
                    filteredMarkers.push(datMap);
                }
            }
        }        
    }

    if (filteredMarkers.length > 0) {
        map.setCenter(filteredMarkers[0].getPosition());
        showInfoBlocks(filteredMarkers[0].provincia);
    }else{
        noCoincidence();
    }
});

var servicesVal = [];
var selectServicios = $('#servicios');
for(let z=0;z<jsonServicios.length;z++){
    if(!servicesVal.includes(jsonServicios[z].idServicio)){
        selectServicios.append($('<option></option>', {value: jsonServicios[z].idServicio, text: jsonServicios[z].titulo}));
        servicesVal.push(jsonServicios[z].idServicio);
    }
}

function hideInfoBlocks(){
    $('.alajuela').css('display', 'none');
    $('.cartago').css('display', 'none');
    $('.heredia').css('display', 'none');
    $('.limon').css('display', 'none');
    $('.guanacaste').css('display', 'none');
    $('.puntarenas').css('display', 'none');
    $('.san_jose').css('display', 'none');
}
function showAllBlocks(){
    $('.alajuela').css('display', 'flex');
    $('.cartago').css('display', 'flex');
    $('.heredia').css('display', 'flex');
    $('.limon').css('display', 'flex');
    $('.guanacaste').css('display', 'flex');
    $('.puntarenas').css('display', 'flex');
    $('.san_jose').css('display', 'flex');
}
function noCoincidence(){
    hideInfoBlocks();
    
    $('.no_coincidence').css('display', 'flex');
}
function showInfoBlocks(provincia, nombre = ''){
    for(let i=1;i<=total;i++){
        $('#counter'+i).hide();
    }

    let provi = '';
    if(provincia != ''){
        provi = provincia.toLowerCase();
        provi = provi.replace(' ', '_');
    }

    hideInfoBlocks();

    if(nombre != ''){
        let nameSite = nombre.replace(' ', '_');
        nameSite = nameSite.toLocaleLowerCase();
        $('.'+nameSite).css('display', 'flex');
    }else{
        $('.'+provi).css('display', 'flex');
    }
}
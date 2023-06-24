<?php
echo '<script> var jsonData = ' . $jsonData . '</script>';
echo '<script> var jsonServicios = ' . $jsonServicios . '</script>';
echo '<script> var base_url = "' . base_url . '"</script>';
?>
<style>
    #map {
        height: 500px;
        width: 100%;
        position: relative;
    }

    #filter {
        background-color: #4b7bb6;
        position: relative;
        bottom: 10em;
        left: 20%;
        width: 60%;
        height: 8em;
        color: #fff;
        padding: 2%;
        font-family: Arial, sans-serif;
    }

    .specialH {
        height: 30px;
    }

    .specialH2 {
        height: 38px;
    }

    #filter input[type="text"],
    #filter select {
        margin-right: 10px;
        padding: 5px;
        background-color: #104f9e;
        color: #fff;
        border: 1px solid #104f9e;
    }

    #filter button {
        padding: 5px 10px;
        background-color: #104f9e;
        color: #fff;
        border: 1px solid #104f9e;
        cursor: pointer;
        margin-top: 2em;
        margin-left: 3em;
    }
    .gm-style-iw .gm-style-iw-c{
        max-width: 1248px !important;
        max-height: 1244px !important;
        height: auto !important;
        width: auto !important;
    }
</style>
<div id="map"></div>
<div id="filter">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <label for="provincias">Provincia</label>
                <select id="provincias" name="provincias" class="form-control width100"></select>
            </div>
            <div class="col-md-3">
                <label for="cantones">Cantón</label>
                <select id="cantones" name="cantones" class="form-control width100">
                    <option value="all">Todos</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="servicios">Servicios:</label>
                <select id="servicios" name="servicios" class="form-control width100">
                    <option value="all">Todos</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="specialH2">
            </div>
            <div class="col-md-1">
                <button id="buscar" onclick="applyFilters()">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fff" width="18px" height="18px">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path d="M15.5 14h-.79l-.28-.27a6.47 6.47 0 1 0-.7.7l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-5 0a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9z" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    var map;
    var markers = [];
    var services = [];
    var validatorServices = [];

    var sj = [];
    var pt = [];
    var al = [];
    var he = [];
    var li = [];
    var ca = [];
    var gt = [];
    var sjc = [];
    var ptc = [];
    var alc = [];
    var hec = [];
    var lic = [];
    var cac = [];
    var gtc = [];
    var mainCantones = [];

    function initMap() {
        // Coordenadas del centro de San José, Costa Rica
        let main = {}
        let pointsOfInterest = [];

        for (let datMap of jsonData) {
            if (datMap.principal == 'Y') {
                main = datMap;
            } else {
                var point = {
                    name: datMap.nombre,
                    provincia: datMap.provincia,
                    canton: datMap.canton,
                    position: {
                        lat: parseFloat(datMap.latitud),
                        lng: parseFloat(datMap.longitud)
                    },
                    photo: base_url + 'images/mapa/' + datMap.imagen,
                    servicios: '',
                    texto:datMap.texto
                };
                pointsOfInterest.push(point);

                if(datMap.provincia == 'San José'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });

                    sj.push(marker);
                    sjc.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Puntarenas'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    pt.push(marker);
                    ptc.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Alajuela'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    al.push(marker);
                    alc.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Heredia'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    he.push(marker);
                    hec.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Limón'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    li.push(marker);
                    lic.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Cartago'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    ca.push(marker);
                    cac.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
                if(datMap.provincia == 'Guanacaste'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo, // Utilizar la foto como icono
                            scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                            origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                            anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                        }
                    });

                    // Agregar información adicional al marcador (nombre y foto)
                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

                    // Mostrar información adicional al hacer clic en el marcador
                    marker.addListener('click', function() {
                        infowindow.open(map, marker);
                    });
                    gt.push(marker);
                    gtc.push(datMap.canton);

                    mainCantones.push({
                        'canton':datMap.canton,
                        'point':marker
                    });
                }
            }
        }

        var center = {
            lat: parseFloat(main.latitud),
            lng: parseFloat(main.longitud)
        };
        map = new google.maps.Map(document.getElementById('map'), {
            center: center,
            zoom: 15
        });

        var marker = new google.maps.Marker({
            position: map.getCenter(),
            map: map,
            icon: base_url + 'images/mapa/' + main.imagen  // Ruta a la imagen que deseas utilizar
        });
        var infoWindow = new google.maps.InfoWindow({
            content: main.texto
        });

        // Abrir la ventana de información al hacer clic en el marcador
        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });

        pointsOfInterest.forEach(function(point) {
            // Filtrar los puntos de interés que coinciden con los criterios seleccionados
            var marker = new google.maps.Marker({
                position: point.position,
                map: map,
                icon: {
                    url: point.photo, // Utilizar la foto como icono
                    scaledSize: new google.maps.Size(50, 50), // Tamaño del marcador
                    origin: new google.maps.Point(0, 0), // Punto de origen de la imagen
                    anchor: new google.maps.Point(25, 25) // Punto de anclaje del marcador
                }
            });

            // Agregar información adicional al marcador (nombre y foto)
            var content = '<h4>' + point.name + '</h4>' +
                '<img src="' + point.photo + '" alt="' + point.name + '" style="margin-left: 15%;margin-right: 15%;"><br>'+
                '<p>' + point.texto + '</p>'

            var infowindow = new google.maps.InfoWindow({
                content: content
            });

            // Mostrar información adicional al hacer clic en el marcador
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            // Agregar el marcador a la lista de marcadores
            markers.push(marker);
        });
    }

    // Función para aplicar los filtros y centrar el mapa en el punto que coincide
    function applyFilters() {
        // Obtener los valores de los filtros seleccionados
        var provinciaFilter = document.getElementById('provincias').value;
        var cantonFilter = document.getElementById('cantones').value;
        var serviciosFilter = document.getElementById('servicios').value;
        var nombreFilter = document.getElementById('nombre').value;

        console.log(jsonServicios);

        var filteredMarkers = [];
        if(cantonFilter == 'all'){
            switch (provinciaFilter) {
                case 'San José':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = sj.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = sj.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Alajuela':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = al.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = al.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Cartago':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = ca.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = ca.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Puntarenas':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = pt.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = pt.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Limón':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = li.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = li.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Guanacaste':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = gt.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = gt.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
                case 'Heredia':
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.provincia == provinciaFilter){
                                filteredMarkers = he.filter(function(marker) {
                                    var point = marker.getPosition();
                                    return point;
                                });
                            }
                        }
                    }else{
                        filteredMarkers = he.filter(function(marker) {
                            var point = marker.getPosition();
                            return point;
                        });
                    }
                break;
            }
        }else{
            for(let cant of mainCantones){
                if(cantonFilter == cant.canton){
                    if(serviciosFilter != 'all'){
                        for(let service of jsonServicios){
                            if(service.idServicio == serviciosFilter && service.canton == cantonFilter){
                                filteredMarkers.push(cant.point);
                            }
                        }
                    }else{
                        filteredMarkers.push(cant.point);
                    }
                }
            }
        }
        

        if (filteredMarkers.length > 0) {
            map.setCenter(filteredMarkers[0].getPosition());
        }
    }
    $(document).ready(function(){
        provinciaSel = $('#provincias');
        provinciaSel.append($('<option></option>', {value: 'San José', text: 'San José', selected: true}));
        provinciaSel.append($('<option></option>', {value: 'Alajuela', text: 'Alajuela'}));
        provinciaSel.append($('<option></option>', {value: 'Cartago', text: 'Cartago'}));
        provinciaSel.append($('<option></option>', {value: 'Heredia', text: 'Heredia'}));
        provinciaSel.append($('<option></option>', {value: 'Limón', text: 'Limón'}));
        provinciaSel.append($('<option></option>', {value: 'Puntarenas', text: 'Puntarenas'}));
        provinciaSel.append($('<option></option>', {value: 'Guanacaste', text: 'Guanacaste'}));

        if(sjc.length > 0){
            for(let canton of sjc){
                $('select[name="cantones"]').append($('<option></option>')).text(canton);
            }
        }

        $('#provincias').on('change', function(){
            var prov = $(this).val();
            var selectCantones = $('#cantones');

            switch (prov) {
                case 'San José':
                    if(sjc.length > 0){
                        for(let i=0;i<sjc.length;i++){
                            var selected = (i==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: sjc[i], text: sjc[i], selected:selected}));
                        }
                    }
                break;
                case 'Alajuela':
                    if(alc.length > 0){
                        for(let j=0;j<alc.length;j++){
                            var selected = (j==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: alc[j], text: alc[j], selected:selected}));
                        }
                    }
                break;
                case 'Cartago':
                    if(cac.length > 0){
                        for(let k=0;k<cac.length;k++){
                            var selected = (k==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: cac[k], text: cac[k], selected:selected}));
                        }
                    }
                break;
                case 'Heredia':
                    if(hec.length > 0){
                        for(let l=0;l<hec.length;l++){
                            var selected = (l==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: hec[l], text: hec[l], selected:selected}));
                        }
                    }
                break;
                case 'Limón':
                    if(lic.length > 0){
                        for(let m=0;m<lic.length;m++){
                            var selected = (m==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: lic[m], text: lic[m], selected:selected}));
                        }
                    }
                break;
                case 'Puntarenas':
                    if(ptc.length > 0){
                        for(let n=0;n<ptc.length;n++){
                            var selected = (n==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: ptc[n], text: ptc[n], selected:selected}));
                        }
                    }
                break;
                case 'Guanacaste':
                    if(gtc.length > 0){
                        for(let o=0;o<gtc.length;o++){
                            var selected = (o==0) ? true: false;
                            selectCantones.append($('<option></option>', {value: gtc[o], text: gtc[o], selected:selected}));
                        }
                    }
                break;
            }
        });

        for(let serv of jsonServicios){
            if(!validatorServices.includes(serv.idServicio)){
                services.push(serv);
                validatorServices.push(serv.idServicio);
            }
        }

        var selectServicios = $('#servicios');
        if(services.length > 0){
            for(let z=0;z<services.length;z++){
                selectServicios.append($('<option></option>', {value: services[z].idServicio, text: services[z].titulo}));
            }
        }
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAeXI4o0HJ8WLtu178RiSlNiJrGlb5l-nw&callback=initMap" async defer></script>
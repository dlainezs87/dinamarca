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
        padding: 1%;
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
        width: 25%;
        float: right;
    }
    .gm-style-iw .gm-style-iw-c{
        max-width: 1248px !important;
        max-height: 1244px !important;
        height: auto !important;
        width: auto !important;
    }
    .sites{
        margin: -5em 0 3em 20%;
    }
    .locations{
        display: flex;
        justify-content: center;
        font-family: 'Nunito', sans-serif;
        cursor:pointer;
    }
    .color1{
        background-color: #104F9E;
        font-weight: bold;
        text-align: center;
    }
    .color2{
        background-color: #76BD41;
        font-weight: bold;
        text-align: center;
    }
    .color3{
        background-color: #F8F8F8;
        font-weight: bold;
        text-align: center;
        width: 20%;
    }
    .color4{
        background-color: #FFFFFF;
        font-weight: bold;
        color: black;
        text-align: center;
    }
    .mainLetter{
        font-size: 75px;
    }
    .grey{
        background-color: #F8F8F8;
        width: 35%;
    }
    .grey2{
        background-color: #f0efef;
        width: 50%;
    }
    .al{
        display: none;
    }
    .ca{
        display: none;
    }
    .he{
        display: none;
    }
    .li{
        display: none;
    }
    .gu{
        display: none;
    }
    .pu{
        display: none;
    }
    @media (max-width: 479px) {
        #filter {
            background-color: #4b7bb6;
            position: relative;
            top: 2em;
            left: 5%;
            width: 90%;
            height: 25em;
            color: #fff;
            padding: 2%;
            font-family: Arial, sans-serif;
        }
        .sites{
            margin: 3em 0 3em 0;
        }
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
                    <option value="all" selected>Todos</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="servicios">Servicios:</label>
                <select id="servicios" name="servicios" class="form-control width100">
                    <option value="all">Todos</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="form-control specialH2 width100" placeholder="Busqueda por nombre:">
            </div>
        </div>
    </div>
</div>
<div class="container sites">
    <div class="row col-12">
        <div class="col-12">
            <label for="informacion">Informaci&oacute;n:</label>
        </div>
        <div class="col-12">
            <?php
                $counter = 1;
                $info = 1;
                $total = count($Mapa);
                foreach($Mapa as $map){
                    if($counter>4){
                        $counter = 1;
                    }
                    $url = (!empty($map['url'])) ? $map['url']: base_url;
                    $dominio = (!empty($url)) ? parse_url($url, PHP_URL_HOST): base_url;

                    $string = $map['nombre'];
                    $primeraLetra = strtoupper(substr($string, 0, 1));
                    $prov = '';
                    switch ($map['provincia']){
                        case 'San Jose':
                            $prov = 'sj';
                        break;
                        case 'Alajuela':
                            $prov = 'al';
                        break;
                        case 'Cartago':
                            $prov = 'ca';
                        break;
                        case 'Heredia':
                            $prov = 'he';
                        break;
                        case 'Limon':
                            $prov = 'li';
                        break;
                        case 'Guanacaste':
                            $prov = 'gu';
                        break;
                        case 'Puntarenas':
                            $prov = 'pu';
                        break;
                    }
                    ?>
                    <div class="locations mt-2 <?= $prov ?>" onclick="showInfo(<?= $info ?>);"style="width:100%;">
                        <div style="display:flex;flex:1;">
                            <div class="color<?= $counter ?>">
                                <label class="mainLetter"><?= $primeraLetra ?></label>
                            </div>
                            <div class="grey" style="padding:3.5%;">
                                <label><?= $map['nombre'] ?></label>
                            </div>
                            <div class="grey2" style="padding:3.5%;">
                                <label><?= $map['texto'] ?></label>
                            </div>
                        </div>
                    </div>
                    <div style="display:none;height: 5em;padding-top: 1%;padding-left: 1%;" id="counter<?= $info ?>">
                        <?= 'Visite nuestro sitio web en <a href="' . $url . 
                            '" target="_blank">' . $dominio . '</a><br>Nuestro horario de atención: ' . $map['horario'] . 
                            '. <br> Para más información al teléfono: ' . $map['telefono'] . ' con ' . $map['encargado'] . 
                            ' o escríbanos a nuestra aplicación de <a href="https://wa.me/' . $map['whatsapp'] . '" target="_blank" class="btn-whatsapp">WhatsApp</a>' 
                        ?>
                    </div>
                <?php
                    $counter++;
                    $info++;
                    }
                ?>
        </div>
    </div>
</div>
<script>
    var total = "<?= $total ?>"
    function showInfo(id){
        for(let i=1;i<=total;i++){
            $('#counter'+i).hide();
        }
        $('#counter'+id).show('slow');
    }
    var map;
    var markers = [];
    var services = [];
    var validatorServices = [];
    var namesMain = [];

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
        let main = {}
        let pointsOfInterest = [];

        for (let datMap of jsonData){
            if(datMap.nombre){
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

                var marker = new google.maps.Marker({
                    position: point.position,
                    map: map,
                    icon: {
                        url: point.photo,
                        scaledSize: new google.maps.Size(50, 50),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(25, 25)
                    }
                });

                var content = '<h3>' + point.name + '</h3>' +
                    '<img src="' + point.photo + '" alt="' + point.name + '">';

                var infowindow = new google.maps.InfoWindow({
                    content: content
                });

                marker.addListener('click', function() {
                    infowindow.open(map, marker);
                });
                namesMain.push({
                    'nombre':datMap.nombre,
                    'point':marker
                });

            }
            if (datMap.principal == 'Y') {
                main = datMap;
                sjc.push(datMap.canton);
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

                if(datMap.provincia == 'San Jose'){
                    var marker = new google.maps.Marker({
                        position: point.position,
                        map: map,
                        icon: {
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
                            url: point.photo,
                            scaledSize: new google.maps.Size(50, 50),
                            origin: new google.maps.Point(0, 0),
                            anchor: new google.maps.Point(25, 25)
                        }
                    });

                    var content = '<h3>' + point.name + '</h3>' +
                        '<img src="' + point.photo + '" alt="' + point.name + '">';

                    var infowindow = new google.maps.InfoWindow({
                        content: content
                    });

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
            icon: base_url + 'images/mapa/' + main.imagen
        });
        var infoWindow = new google.maps.InfoWindow({
            content: main.texto
        });

        marker.addListener('click', function() {
            infoWindow.open(map, marker);
        });

        sj.push(marker);

        pointsOfInterest.forEach(function(point) {
            var marker = new google.maps.Marker({
                position: point.position,
                map: map,
                icon: {
                    url: point.photo,
                    scaledSize: new google.maps.Size(50, 50),
                    origin: new google.maps.Point(0, 0),
                    anchor: new google.maps.Point(25, 25)
                }
            });

            var content = '<h4>' + point.name + '</h4>' +
                '<img src="' + point.photo + '" alt="' + point.name + '" style="margin-left: 15%;margin-right: 15%;"><br>'+
                '<p>' + point.texto + '</p>'

            var infowindow = new google.maps.InfoWindow({
                content: content
            });

            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });

            markers.push(marker);
        });
    }
    function compararNombres(nombre, variable) {
        return nombre.toLowerCase().includes(variable.toLowerCase());
    }

    function applyFilters() {
        var provinciaFilter = document.getElementById('provincias').value;
        var cantonFilter = document.getElementById('cantones').value;
        var serviciosFilter = document.getElementById('servicios').value;
        var nombreFilter = document.getElementById('nombre').value;

        var filteredMarkers = [];
        if(nombreFilter != '' && nombreFilter != undefined){
            for(let sitename of namesMain){
                if(compararNombres(sitename.nombre, nombreFilter)){
                    $('#provincias').prepend($('<option value="">Seleccione una provincia</option>'));
                    $('#provincias').val('');
                    filteredMarkers.push(sitename.point);
                }
            }
        }
        if(serviciosFilter != 'all'){
            for(let service of jsonServicios){
                if(service.idServicio == serviciosFilter){
                    let prov = service.provincia;
                    switch (prov) {
                        case 'San Jose':
                            filteredMarkers = sj.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Cartago':
                            filteredMarkers = ca.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Alajuela':
                            filteredMarkers = al.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Heredia':
                            filteredMarkers = he.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Limon':
                            filteredMarkers = li.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Guanacaste':
                            filteredMarkers = gt.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                        case 'Puntarenas':
                            filteredMarkers = pt.filter(function(marker) {
                                var point = marker.getPosition();
                                return point;
                            });
                        break;
                    }
                }
            }
        }
        if(cantonFilter == 'all'){
            if(provinciaFilter != ''){
                switch (provinciaFilter) {
                    case 'San Jose':
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
        provinciaSel.append($('<option></option>', {value: 'San Jose', text: 'San Jose', selected: true}));
        provinciaSel.append($('<option></option>', {value: 'Alajuela', text: 'Alajuela'}));
        provinciaSel.append($('<option></option>', {value: 'Cartago', text: 'Cartago'}));
        provinciaSel.append($('<option></option>', {value: 'Heredia', text: 'Heredia'}));
        provinciaSel.append($('<option></option>', {value: 'Limón', text: 'Limón'}));
        provinciaSel.append($('<option></option>', {value: 'Puntarenas', text: 'Puntarenas'}));
        provinciaSel.append($('<option></option>', {value: 'Guanacaste', text: 'Guanacaste'}));

        if(sjc.length > 0){
            var selectCantones = $('#cantones');
            for(let i=0;i<sjc.length;i++){
                var selected = (i==0) ? true: false;
                selectCantones.append($('<option></option>', {value: sjc[i], text: sjc[i], selected:selected}));
            }
        }

        $( "#nombre" ).on( "keyup", function() {
            applyFilters();
        });
        $('#cantones').on('change', function(){
            applyFilters();
        });
        $('#servicios').on('change', function(){
            applyFilters();
        });
        $('#provincias').on('change', function(){
            var prov = $(this).val();
            var selectCantones = $('#cantones');
            selectCantones.empty();
            for(let i=1;i<=total;i++){
                $('#counter'+i).hide();
            }

            switch (prov) {
                case 'San Jose':
                    $('.al').css('display', 'none');
                    $('.ca').css('display', 'none');
                    $('.he').css('display', 'none');
                    $('.li').css('display', 'none');
                    $('.gu').css('display', 'none');
                    $('.pu').css('display', 'none');                        
                    $('.sj').css('display', 'flex');
                    if(sjc.length > 0){
                        var validator = [];
                        for(let i=0;i<sjc.length;i++){
                            if(!validator.includes(sjc[i])){
                                var selected = (i==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: sjc[i], text: sjc[i], selected:selected}));
                                validator.push(sjc[i]);
                            }
                        }
                    }
                break;
                case 'Alajuela':
                    $('.sj').css('display', 'none');
                    $('.ca').css('display', 'none');
                    $('.he').css('display', 'none');
                    $('.li').css('display', 'none');
                    $('.gu').css('display', 'none');
                    $('.pu').css('display', 'none');  
                    $('.al').css('display', 'flex');
                    if(alc.length > 0){
                        var validator = [];
                        for(let j=0;j<alc.length;j++){
                            if(!validator.includes(alc[j])){
                                var selected = (j==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: alc[j], text: alc[j], selected:selected}));
                                validator.push(alc[j]);
                            }
                        }
                    }
                break;
                case 'Cartago':
                    $('.sj').css('display','none');
                    $('.al').css('display','none');
                    $('.he').css('display','none');
                    $('.li').css('display','none');
                    $('.gu').css('display','none');
                    $('.pu').css('display','none');  
                    $('.ca').css('display','flex');
                    if(cac.length > 0){
                        var validator = [];
                        for(let k=0;k<cac.length;k++){
                            if(!validator.includes(cac[k])){
                                var selected = (k==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: cac[k], text: cac[k], selected:selected}));
                                validator.push(cac[k]);
                            }
                        }
                    }
                break;
                case 'Heredia':
                    $('.sj').css('display','none');
                    $('.al').css('display','none');
                    $('.gu').css('display','none');
                    $('.pu').css('display','none');
                    $('.li').css('display','none');
                    $('.ca').css('display','none');
                    $('.he').css('display','flex');
                    if(hec.length > 0){
                        var validator = [];
                        for(let l=0;l<hec.length;l++){
                            if(!validator.includes(hec[l])){
                                var selected = (l==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: hec[l], text: hec[l], selected:selected}));
                                validator.push(hec[l]);
                            }
                        }
                    }
                break;
                case 'Limón':
                    $('.sj').css('display', 'none');
                    $('.al').css('display', 'none');
                    $('.he').css('display', 'none');
                    $('.pu').css('display', 'none');
                    $('.gu').css('display', 'none');
                    $('.ca').css('display', 'none');
                    $('.li').css('display', 'flex');
                    if(lic.length > 0){
                        var validator = [];
                        for(let m=0;m<lic.length;m++){
                            if(!validator.includes(lic[m])){
                                var selected = (m==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: lic[m], text: lic[m], selected:selected}));
                                validator.push(lic[m]);
                            }
                        }
                    }
                break;
                case 'Puntarenas':
                    $('.sj').css('display','none');
                    $('.al').css('display','none');
                    $('.he').css('display','none');
                    $('.li').css('display','none');
                    $('.gu').css('display','none');
                    $('.ca').css('display','none');
                    $('.pu').css('display','flex');
                    if(ptc.length > 0){
                        var validator = [];
                        for(let n=0;n<ptc.length;n++){
                            if(!validator.includes(ptc[n])){
                                var selected = (n==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: ptc[n], text: ptc[n], selected:selected}));
                                validator.push(ptc[n]);
                            }
                        }
                    }
                break;
                case 'Guanacaste':
                    $('.sj').css('display','none');
                    $('.al').css('display','none');
                    $('.he').css('display','none');
                    $('.pu').css('display','none');
                    $('.li').css('display','none');
                    $('.ca').css('display','none');
                    $('.gu').css('display','flex');
                    if(gtc.length > 0){
                        var validator = [];
                        for(let o=0;o<gtc.length;o++){
                            if(!validator.includes(gtc[o])){
                                var selected = (o==0) ? true: false;
                                selectCantones.append($('<option></option>', {value: gtc[o], text: gtc[o], selected:selected}));
                                validator.push(gtc[o]);
                            }
                        }
                    }
                break;
            }

            applyFilters();
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
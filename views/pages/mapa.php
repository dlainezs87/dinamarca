<?php
echo '<script> var jsonData = ' . $jsonData . '</script>';
echo '<script> var jsonServicios = ' . $jsonServicios . '</script>';
echo '<script> var base_url = "' . base_url . '"</script>';
?>
<style>
    #map {
        height: 600px;
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
        width: 12%;
    }
    .color2{
        background-color: #76BD41;
        font-weight: bold;
        text-align: center;
        width: 12%;
    }
    .color3{
        background-color: #F8F8F8;
        font-weight: bold;
        text-align: center;
        width: 12%;
    }
    .color4{
        background-color: #FFFFFF;
        font-weight: bold;
        color: black;
        text-align: center;
        width: 12%;
    }
    .mainLetter{
        font-size: 75px;
    }
    .grey{
        background-color: #F8F8F8;
        width: 45%;
        min-width: 45%;
    }
    .grey2{
        background-color: #f0efef;
        width: 45%;
        min-width: 45%;
    }
    .alajuela{
        display: none;
    }
    .cartago{
        display: none;
    }
    .heredia{
        display: none;
    }
    .limon{
        display: none;
    }
    .guanacaste{
        display: none;
    }
    .puntarenas{
        display: none;
    }
    .san_jose{
        display: none;
    }
    .maxsize{
        max-width: 128px;
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
                <select id="provincias" name="provincias" class="form-control width100">
                    <option value="" selected>Todas</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="cantones">Cantón</label>
                <select id="cantones" name="cantones" class="form-control width100">
                    <option value="" selected>Todos</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="servicios">Servicios:</label>
                <select id="servicios" name="servicios" class="form-control width100">
                    <option value="">Todos</option>
                </select>
            </div>
            <div class="col-md-3">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" class="form-control specialH2 width100" placeholder="Digite al menos 3 letras:">
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
                    $waze = (!empty($map['url'])) ? $map['url']: '';

                    $string = $map['nombre'];
                    $primeraLetra = strtoupper(substr($string, 0, 1));
                    $nameSite = strtolower($map['nombre']);
                    $nameSite = str_replace(' ', '_',$nameSite);

                    $prov = strtolower($map['provincia']);
                    $prov = str_replace(' ', '_', $prov);
                    echo '<script> var total = ' . $total . '</script>';
                    ?>
                    <div class="locations mt-2 <?= $prov ?> <?= $nameSite ?>" 
                        onclick="showInfo(<?= $info ?>);"style="width:100%;<?php echo $map['principal'] == 'Y' ? 'display:flex;' : '';?>">
                        <div style="display:flex;flex:1;">
                            <div class="color<?= $counter ?>">
                                <?php 
                                    if(!empty($map['imagen'])){
                                ?>
                                    <img class="maxsize" src="<?= base_url . 'images/mapa/' . $map['imagen'] ?>" alt="Imagen del Sitio">
                                <?php 
                                    }else{
                                ?>
                                        <label class="mainLetter"><?= $primeraLetra ?></label>
                                <?php 
                                    }
                                ?>
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
                        <?php echo 'Visite nuestro sitio web en <a href="' . $url . 
                            '" target="_blank">' . $dominio . '</a><br>Nuestro horario de atención: ' . $map['horario'] . 
                            '. <br> Para más información al teléfono: ' . $map['telefono'] . ' con ' . $map['encargado'] . 
                            ' o escríbanos a nuestra aplicación de <a href="https://wa.me/' . $map['whatsapp'] . '" target="_blank" class="btn-whatsapp">WhatsApp</a>'; 
                            if(!empty($waze)){
                                echo '<br>B&uacute;scanos tambi&eacute;n en <a href="'. $waze . '" target="_blank" class="btn-whatsapp">Waze</a>';
                            }
                        ?>
                    </div>
                <?php
                    $counter++;
                    $info++;
                    }
                ?>
            <div class="locations mt-2 no_coincidence" style="display: none;">
                No hay coincidencias con su b&uacute;squeda
            </div>
        </div>
    </div>
</div>
<script src="<?= base_url ?>js/mapa.js?<?php echo time(); ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAENtpsWwKhg4SnStNlNe_ar5G8poZHH60&callback=initMap" async defer></script>
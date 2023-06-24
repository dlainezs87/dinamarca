<?php
require_once"config/conexion.php";
require_once"config/parameters.php";
require_once"views/frame/header.php";


if(!isset($_GET['pag'])){
  require_once"views/home_modules/slider.php";  
  require_once"views/home_modules/services.php";
  require_once"views/home_modules/map.php";
  require_once"views/home_modules/map.php";
  require_once"views/home_modules/featuredproducts.php";
  require_once"views/home_modules/clients.php";
  require_once"views/home_modules/faq.php";
  require_once"views/home_modules/brands.php";
      
} else {
    switch ($_GET['pag']) {
        case"quotes":
            $dataQuote = $_POST;
            if(isset($_POST['id'])&&isset($_POST['amount'])&&isset($_POST['product'])){
                require_once 'views/quotes/quoteForm.php'; 
            }
            
            break;
        case 'searching':
            $datos=isset($_POST['search'])?$_POST['search']:'';
            $buscadores = addslashes($datos);
            $buscadorArray=explode(" ", $buscadores); 
            require_once 'views/search/principalsearch.php'; 
            
            break;
        case 'projects':
            if(isset($_GET['id'])){
                require_once 'views/proyectos/descripcionP.php'; 
              }else {
                  require_once"views/proyectos/principal.php";
                  require_once"views/proyectos/galeria.php"; 
              }
            break;
        case 'post':
            if(isset($_GET['id'])){
                require_once"views/blogs/blogByID.php";
            }else {
                require_once"views/blogs/blogByID.php";
            }
            break;
        case 'aboutus':
            if(isset($_GET['id'])){
                require_once"views/pages/about.php";
            }else {
                require_once"views/pages/about.php";
            }
            break;
        case 'pdp':
            if(isset($_GET['id'])){
                require_once"views/pages/pdp.php";
            }else {
                require_once"views/pages/pdp.php";
            }
            break;
        case 'contact':
            if(isset($_GET['id'])){
                require_once"views/pages/contact.php";
            }else {
                require_once"views/pages/contact.php";
            }
            break;

        case 'products':
            if(isset($_GET['id'])){
                require_once"views/pages/products.php";
            }else {
                require_once"views/pages/products.php";
            }
            break; 

        case 'blog':
            if(isset($_GET['id'])){
                require_once"views/pages/blog.php";
            }else {
                require_once"views/pages/blog.php";
            }
            break; 

         case 'videos':
            if(isset($_GET['id'])){
                require_once"views/pages/videos.php";
            }else {
                require_once"views/pages/videos.php";
            }
            break; 

         case 'conventions':
            if(isset($_GET['id'])){
                require_once"views/pages/conventions.php";
            }else {
                require_once"views/pages/conventions.php";
            }
            break; 
        case 'mapa':
            $Mapa = [];
            $Servicios = [];
            $sql = "select * from mapa order by Nombre ASC";
            $query = $mysqli->query($sql);
            while($row = $query->fetch_assoc()){
                array_push($Mapa, $row);
            }
            $jsonData = json_encode($Mapa);

            $sql = "SELECT m.id AS idMapa, m.canton, m.provincia, s.id AS idServicio, titulo 
                    FROM serviciovsmapa sm 
                    LEFT JOIN mapa m ON (sm.idMapa = m.id) 
                    LEFT JOIN servicios s ON (sm.idServicio = s.id);";
            $query = $mysqli->query($sql);
            while($row = $query->fetch_assoc()){
                array_push($Servicios, $row);
            }
            $mysqli->close();
            $jsonServicios = json_encode($Servicios);
            require_once"views/pages/mapa.php";
        break; 

        default:
            break;
    }
}

require_once"views/frame/footer.php";  

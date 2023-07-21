<?php 
$dataURI = $_SERVER['REQUEST_URI'];
$pageData = explode('/', $dataURI);

$page = (!empty($pageData[3])) ? $pageData[3]: 'dashboard.php';
?>
<!-- Nav Item - Dashboard -->
<li class="nav-item <?= ($page=='dashboard.php') ? 'active':'' ?>">
    <a class="nav-link" href="dashboard.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Inicio</span>
    </a>
</li>
<!-- <li class="nav-item">
    <a class="nav-link" href="categorias.php">
        <i class="fas fa-list"></i>
        <span>Categorías</span></a>
</li> -->
<!-- <li class="nav-item">
    <a class="nav-link" href="menus.php">
        <i class="fas fa-bars"></i>
        <span>Menu</span></a>
</li> -->
<!--
<li class="nav-item">
    <a class="nav-link" href="sliders.php">
        <i class="fas fa-image"></i>
        <span>Slider</span></a>
</li>
-->
<li class="nav-item <?= ($page=='servicios.php') ? 'active':'' ?>">
    <a class="nav-link" href="servicios.php">
        <i class="fa-solid fa-cart-flatbed"></i>
        <span>Productos</span></a>
</li>

<li class="nav-item <?= ($page=='quotes.php') ? 'active':'' ?>">
    <a class="nav-link" href="quotes.php">
        <i class="fa-solid fa-tag"></i>
        <span>Cotizaciones</span></a>
</li>

<li class="nav-item <?= ($page=='conventions.php') ? 'active':'' ?>">
    <a class="nav-link" href="conventions.php">
        <i class="fas fa-hands-helping"></i>
        <span>Convenios</span></a>
</li>
<!--  
<li class="nav-item">
    <a class="nav-link" href="features.php">
        <i class="fa-solid fa-list-ol"></i>
        <span>Features</span></a>
</li>
-->

<!--<li class="nav-item">
    <a class="nav-link" href="equipos.php">
        <i class="fas fa-users"></i>
        <span>Equipo</span></a>
</li>-->
<!--
<li class="nav-item">
    <a class="nav-link" href="galerias.php">
        <i class="fas fa-images"></i>
        <span>Proyects</span></a>
</li>
-->
<li class="nav-item <?= ($page=='videos.php') ? 'active':'' ?>">
    <a class="nav-link" href="videos.php">
        <i class="fas fa-video"></i>
        <span>Videos</span></a>
</li>

<li class="nav-item <?= ($page=='mapa.php') ? 'active':'' ?>">
    <a class="nav-link" href="mapa.php">
    <i class="fa-solid fa-map"></i>
        <span>Mapa</span></a>
</li>

<li class="nav-item <?= ($page=='faq.php') ? 'active':'' ?>">
    <a class="nav-link" href="faq.php">
        <i class="fas fa-question-circle"></i>
        <span>FAQ</span></a>
</li>

<!--            <li class="nav-item">
    <a class="nav-link" href="descargables.php">
        <i class="fas fa-download"></i>
        <span>Descargables</span></a>
</li>-->

<li class="nav-item <?= ($page=='brands.php') ? 'active':'' ?>">
    <a class="nav-link" href="brands.php">
        <i class="far fa-image"></i>
        <span>Marcas</span></a>
</li>

<li class="nav-item <?= ($page=='testimony.php') ? 'active':'' ?>">
    <a class="nav-link" href="testimony.php">
        <i class="fas fa-users"></i>
        <span>Testimonios</span></a>
</li>

<li class="nav-item <?= ($page=='blogs.php') ? 'active':'' ?>">
    <a class="nav-link" href="blogs.php">
        <i class="fas fa-comment"></i>
        <span>Blogs</span></a>
</li>
<li class="nav-item <?= ($page=='prospectos.php') ? 'active':'' ?>">
    <a class="nav-link" href="prospectos.php">
        <i class="fas fa-comment"></i>
        <span>Prospectos</span></a>
</li>



<li class="nav-item <?= ($page=='logout.php') ? 'active':'' ?>">
    <a class="nav-link" href="logout.php">
        <i class="fas fa-times-circle"></i>
        <span>Log Out</span></a>
</li>



           

           

 


           


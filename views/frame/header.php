<!DOCTYPE html>
<html lang='es'>
<head>  
   
<title>Clinicas Dinamarca</title>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <link rel="icon" href="<?=base_url?>images/principal/favicon.png">
  <!--GOOGLE FONTS-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  
<!--JQUERY-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<!-- bootstrap core css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

<!--owl slider stylesheet -->
 <!--CAROUSEL.css------------->
  <link rel="stylesheet" href="css/owl.carousel.min.css" integrity="" crossorigin="anonymous" />

	
<!-- font awesome style -->
<link href="css/font-awesome.min.css" rel="stylesheet" />

<!-- Custom styles for this template -->
<link href="css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="css/responsive.css" rel="stylesheet" />
   <!--CUSTOM STYLES-->
  <link href="/dist/general-styles.css">
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
  <!--ICONOS-->
  <script src="https://kit.fontawesome.com/b58e5dabf0.js" crossorigin="anonymous"></script>
  
  <!--CAROUSEL.css------------->
  <link rel="stylesheet" href="./css/owl.carousel.min.css" integrity="" crossorigin="anonymous" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="" crossorigin="anonymous"></script>


      <script>    
    
    $(window).on("load",function(){
$("#preloader").fadeOut("slow");
$("#cont").removeAttr('style');
$("#navbr").fadeIn("slow");
$("#navbr").addClass("fixed-top");

}); 
</script>
<style> 
       @import url("https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap");
body {
  font-family: 'Nunito', sans-serif;
  color: #000000;
  background-color: #fefefe;
  overflow-x: hidden;
}

.layout_padding {
  padding: 50px 0;
}

.layout_padding2 {
  padding: 75px 0;
}

.layout_padding2-top {
  padding-top: 75px;
}

.layout_padding2-bottom {
  padding-bottom: 75px;
}

.layout_padding-top {
  padding-top: 90px;
}

.layout_padding-bottom {
  padding-bottom: 90px;
}

.layout_margin-top {
  margin-top: 90px;
}

.layout_margin-bottom {
  margin-bottom: 90px;
}

.heading_container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
}

.heading_container h2,h3{
  position: relative;
  font-weight: bold;
  margin-bottom: 0;
  text-transform: uppercase;
}

.heading_container p {
  margin-top: 10px;
  margin-bottom: 0;
}

.heading_container.heading_center {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
}

a,
a:hover,
a:focus {
  text-decoration: none;
}

a:hover,
a:focus {
  color: initial;
}

.btn,
.btn:focus {
  outline: none !important;
  -webkit-box-shadow: none;
          box-shadow: none;
}

/*header section*/
.hero_area {
  position: relative;
  min-height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.hero_area .hero_bg_box {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: end;
      -ms-flex-align: end;
          align-items: flex-end;
  overflow: hidden;
  z-index: -1;
}

.hero_area .hero_bg_box img {
  width: 100%;
  height: 100%;
  -o-object-fit: cover;
     object-fit: cover;
  -o-object-position: bottom right;
     object-position: bottom right;
}

.sub_page .hero_area {
  min-height: auto;
  background-color: #178066;
}

.sub_page .hero_area .hero_bg_box {
  display: none;
}

.header_section {
  background-color:white;
  box-shadow: -1px 9px 14px -7px rgba(0,0,0,0.44);
-webkit-box-shadow: -1px 9px 14px -7px rgba(0,0,0,0.44);
-moz-box-shadow: -1px 9px 14px -7px rgba(0,0,0,0.44);
}

.header_section .container-fluid {
  padding-right: 25px;
  padding-left: 25px;
}

.navbar-brand span {
  font-weight: bold;
  font-size: 24px;
  color: #ffffff;
  text-transform: uppercase;
}

.custom_nav-container {
  padding: 0;
}

.custom_nav-container .navbar-nav {
  margin-left: auto;
}

.custom_nav-container .navbar-nav .nav-item .nav-link {
  padding: 5px 20px;
  color: #000000;
  text-align: center;
  text-transform: uppercase;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  font-weight: bolder;
}

.custom_nav-container .navbar-nav .nav-item .nav-link:hover {
  color: #76BD41;
}

.custom_nav-container .nav_search-btn {
  width: 35px;
  height: 35px;
  padding: 0;
  border: none;
  color: #ffffff;
}

.custom_nav-container .nav_search-btn:hover {
  color: #62d2a2;
}

.custom_nav-container .navbar-toggler {
  outline: none;
}

.custom_nav-container .navbar-toggler {
  padding: 0;
  width: 37px;
  height: 42px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span {
  display: block;
  width: 35px;
  height: 4px;
  background-color: black;
  margin: 7px 0;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  position: relative;
  border-radius: 5px;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::before, .custom_nav-container .navbar-toggler span::after {
  content: "";
  position: absolute;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: black;
  top: -10px;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.custom_nav-container .navbar-toggler span::after {
  top: 10px;
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] {
  -webkit-transform: rotate(360deg);
          transform: rotate(360deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span {
  -webkit-transform: rotate(45deg);
          transform: rotate(45deg);
}

.custom_nav-container .navbar-toggler[aria-expanded="true"] span::before, .custom_nav-container .navbar-toggler[aria-expanded="true"] span::after {
  -webkit-transform: rotate(90deg);
          transform: rotate(90deg);
  top: 0;
}

/*end header section*/
/* slider section */
.slider_section {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  position: relative;
  padding-bottom:200px;
}

.slider_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.slider_section #customCarousel1 {
  width: 100%;
  position: unset;
}

.slider_section .detail-box {
  color: #1fab89;
  margin-top:50px;
}

.slider_section .detail-box h1 {
  font-size: 3rem;
  font-weight: bold;
  text-transform: uppercase;
  margin-bottom: 15px;
  color: #ffffff;
}

.slider_section .detail-box p {
  color: #fefefe;
  font-size: 14px;
}

.slider_section .detail-box .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin: 0 -5px;
  margin-top: 25px;
}

.slider_section .detail-box .btn-box a {
  margin: 5px;
  text-align: center;
  width: 220px;
}

.slider_section .detail-box .btn-box .btn1 {
  display: inline-block;
  padding: 10px 15px;
  background-color: #ffffff;
  color: #104F9E;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #ffffff;
}

.slider_section .detail-box .btn-box .btn1:hover {
  background-color: transparent;
  color: #ffffff;
}

.slider_section .detail-box .btn-box .btn1-w {
  display: inline-block;
  padding: 10px 15px;
  background-color: transparent;
  color: white;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #ffffff;
}

.slider_section .detail-box .btn-box .btn1-w:hover {
  background-color: #ffffff;
  color: #104F9E;
}

.slider_section .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.slider_section .img-box img {
  width: 100%;
  max-width: 375px;
}

.slider_section .carousel-indicators {
  position: unset;
  margin: 0;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.slider_section .carousel-indicators li {
  background-color: #ffffff;
  width: 12px;
  height: 12px;
  border-radius: 100%;
  opacity: 1;
}

.slider_section .carousel-indicators li.active {
  width: 20px;
  height: 20px;
}

.department_section {
  position: relative;
}

.department_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-top: 45px;
  box-shadow: 2px 0px 24px 1px rgba(0,0,0,0.26);
-webkit-box-shadow: 2px 0px 24px 1px rgba(0,0,0,0.26);
-moz-box-shadow: 2px 0px 24px 1px rgba(0,0,0,0.26);
padding: 0 0 20px 0;
  background-color: #ffffff;
  border-radius: 5px;
  text-align: center;
}

.department_section .box .img-box {
  width: 90px;
  height: 90px;
  margin-bottom: 15px;
  background-color: #62d2a2;
  border-radius: 100%;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.department_section .box .img-box img {
  max-width: 55px;
  max-height: 55px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.department_section .box .detail-box h5 {
  font-weight: bold;
  text-transform: uppercase;
}

.department_section .box .detail-box a {
  color: #76BD41;
  font-weight: 600;
}

.department_section .box .detail-box a:hover {
  color: #76BD41;
}

.department_section .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 45px;
}

.department_section .btn-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #104F9E;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  
}

.department_section .btn-box a:hover {
  background-color: transparent;
  color: #76BD41;
  border: 1px solid #76BD41;
}

.about_section .row {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.about_section .img-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.about_section .img-box img {
  width: 100%;
  border-radius: 15px;
}

.about_section .detail-box h3 {
  font-weight: bold;
}

.about_section .detail-box p {
  margin-top: 15px;
}

.about_section .detail-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #62d2a2;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #62d2a2;
  margin-top: 15px;
}

.about_section .detail-box a:hover {
  background-color: transparent;
  color: #62d2a2;
}

.doctor_section {
  background: rgb(16,79,158);
background: linear-gradient(0deg, rgba(16,79,158,0.9249824929971989) 0%, rgba(16,79,158,0.7429096638655462) 35%, rgba(0,212,255,0) 100%);
}

.doctor_section .heading_container {
  color: #ffffff;
}

.doctor_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  overflow: hidden;
  margin-top: 45px;
  border-radius: 10px;
  overflow: hidden;
  background: #ffffff;
  box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.2);
-webkit-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.2);
-moz-box-shadow: -1px 2px 5px 0px rgba(0,0,0,0.2);
}

.doctor_section .box .img-box {
  width: 100%;
}

.doctor_section .box .img-box img {
  width: 100%;
}

.doctor_section .box .detail-box {
  width: 100%;
  padding: 25px 15px;
  text-align: center;
  position: relative;
}

.doctor_section .box .detail-box .social_box {
  position: absolute;
  z-index: 2;
  left: 50%;
  top: 150%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  background-color: #ffffff;
  padding: 10px;
  border-radius: 5px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  opacity: 0;
  -webkit-transition: all .3s;
  transition: all .3s;
}

.doctor_section .box .detail-box .social_box a {
  color: #62d2a2;
  margin: 0 10px;
}

.doctor_section .box .detail-box .social_box a:hover {
  color: #1fab89;
}

.doctor_section .box:hover .social_box {
  top: 0;
  opacity: 1;
}

.doctor_section .btn-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  margin-top: 45px;
}

.doctor_section .btn-box a {
  display: inline-block;
  padding: 10px 45px;
  background-color: #1fab89;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #1fab89;
}

.doctor_section .btn-box a:hover {
  background-color: transparent;
  color: #1fab89;
}

.products-btn-box{
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.products-btn-box a{
  display: inline-block;
  padding: 10px 45px;
  background-color: #104F9E;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  border: 1px solid #76BD41;
}

.products-btn-box a:hover{
  background-color: transparent;
  color: #76BD41;
}


.contact_section {
  max-width:1400px;
  margin-top:50px;
  padding:40px;
  position: relative;
  background-color: white;
  border-radius: 10px;
}

.contact_section .heading_container {
  margin-bottom: 25px;
}

.contact_section .heading_container h2 {
  text-transform: uppercase;
}

.contact_section .form_container input {
  width: 100%;
  border: none;
  height: 50px;
  margin-bottom: 15px;
  padding-left: 20px;
  outline: 1px solid rgba(0, 0, 0, 0.1);
  color:black;
  font-style: italic;
}

.contact_section .form_container input::-webkit-input-placeholder {
  color: #B4B4B4;
}

.contact_section .form_container input:-ms-input-placeholder {
  color: #B4B4B4;
}

.contact_section .form_container input::-ms-input-placeholder {
  color: #B4B4B4;
}

.contact_section .form_container input::placeholder {
  color: #B4B4B4;
}

.contact_section .form_container input.message-box {
  height: 175px;
}

.contact_section .form_container button {
  width: 100%;
  border: none;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 55px;
  background-color: #104F9E;
  color: #ffffff;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

.contact_section .form_container button:hover {
  background-color: transparent;
  color: #76BD41;
  border: 1px solid #76BD41;
}

.contact_section .map_container {
  height: 368px;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
  padding: 0;
}

.contact_section .map_container .map {
  height: 100%;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
}

.contact_section .map_container .map #googleMap {
  height: 100%;
}

.client_section .heading_container {
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.client_section .box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  text-align: center;
  margin: 45px;
  border-radius: 15px;
}

.client_section .box .img-box {
  margin-bottom: 15px;
  min-width: 145px;
  max-width: 145px;
  overflow: hidden;
}

.client_section .box .img-box img {
  width: 100%;
  border-radius: 100%;
  border: 7px solid rgba(255, 255, 255, 0.45);
}

.client_section .box .detail-box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.client_section .box .detail-box .name img {
  width: 25px;
  margin-bottom: 5px;
}

.client_section .box .detail-box .name h6 {
  color: #76BD41;
  font-size: 20px;
}

.client_section .carousel_btn-container {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
}

.client_section .carousel-control-prev,
.client_section .carousel-control-next {
  position: unset;
  width: 45px;
  height: 45px;
  border: none;
  opacity: 1;
  background-repeat: no-repeat;
  background-size: 12px;
  background-position: center;
  background-color: #104F9E;
  background-position: center;
  border-radius: 5px;
  margin: 0 2.5px;
}

.client_section .carousel-control-prev:hover,
.client_section .carousel-control-next:hover {
  background-color: #76BD41;
}

.client_section .carousel-control-next {
  left: initial;
}

.footer_section {
  background: #f8f8f8;
  color: black;
  padding: 60px 0 15px 0;
  position: relative;
}

.footer_section h4 {
  font-weight: 600;
  margin-bottom: 20px;
}

.footer_section .footer_col {
  margin-bottom: 30px;
}

.footer_section .footer_contact .contact_link_box {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
}

.footer_section .footer_contact .contact_link_box a {
  margin: 5px 0;
  color: black;
}

.footer_section .footer_contact .contact_link_box a i {
  margin-right: 5px;
}

.footer_section .footer_contact .contact_link_box a:hover {
  color: #76BD41;
}

.footer_section .footer_social {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  margin-top: 20px;
  margin-bottom: 10px;
}

.footer_section .footer_social a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  color: black;
  border-radius: 100%;
  margin-right: 10px;
  font-size: 24px;
}

.footer_section .footer_social a:hover {
  color: #76BD41;
}

.footer_section .footer_links {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
      flex-wrap: wrap;
}

.footer_section .footer_links a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  margin-right: 15px;
  margin-bottom: 15px;
  color: black;
}

.footer_section .footer_links a:hover {
  color: #76BD41;
}

.footer_section form input {
  border: none;
  background-color: #fefefe;
  width: 100%;
  height: 45px;
  color: #000000;
  outline: none;
  border-radius: 5px;
  padding: 0 15px;
  font-style: italic;
}

.footer_section form input::-webkit-input-placeholder {
  color: rgba(0, 0, 0, 0.1);
}

.footer_section form input:-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.1);
}

.footer_section form input::-ms-input-placeholder {
  color: rgba(0, 0, 0, 0.1);
}

.footer_section form input::placeholder {
  color: rgba(0, 0, 0, 0.1);
}

.footer_section form button {
  width: 100%;
  text-align: center;
  display: inline-block;
  padding: 10px 55px;
  background-color: #104F9E;
  color: white;
  border-radius: 5px;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
  margin-top: 15px;
  border:none;
}

.footer_section form button:hover {
  background-color: transparent;
  color: #76BD41;
  border: 1px solid #76BD41;
}

.footer_section .footer-info {
  text-align: center;
}

.footer_section .footer-info p {
  color: black;
  border-top:1px solid rgba(0,0,0,0.1);
  padding: 25px 0;
  margin: 0;
}

.footer_section .footer-info p a {
  color: inherit;
}
.map-container {
   padding: 3.2rem 0.8rem;
   position: relative;
   display: inline-block;
}
 .map-container img {
   width: 100%;
}
 .map-container .point {
   cursor: pointer;
   position: absolute;
   width: 1.6rem;
   height: 1.6rem;
   background-color:transparent;
   border-radius: 50%;
   transition: all 0.3s ease;
   will-change: transform, box-shadow;
   transform: translate(-50%, -50%);
   box-shadow: 0 0 0 rgba(118, 189, 65, 0.4);
   animation: pulse 3s infinite;
}
 .map-container .point:hover {
   animation: none;
   transform: translate(-50%, -50%) scale3D(1.35, 1.35, 1);
   box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}
 .map-container .sj {
   top: 44%;
   left:50%;
}
 
.map-container .pt {
   top: 35%;
   left:15%;
}

.map-container .gu {
   top: 20%;
   left:18%;
}

.map-container .ala {
   top: 30%;
   left:38%;
}

.map-container .her {
   top: 30%;
   left:48%;
}

 
 @keyframes pulse {
   0% {
     box-shadow: 0 0 0 0 rgba(0, 172, 193, 0.5);
  }
   70% {
     box-shadow: 0 0 0 25px rgba(0, 172, 193, 0);
  }
   100% {
     box-shadow: 0 0 0 0 rgba(0, 172, 193, 0);
  }
}
 
.btn-link {
    font-weight: bolder;
    color: black;
    text-decoration: none;
}




/* modal carousel */
.modal .carousel-indicators {
  margin: 0;
  bottom: -34px;
  left: auto;
}

.modal .carousel-indicators > li {
  border-radius: 50%;
  width: 16px;
  height: 16px;
  border: 1px solid #fff;
  background: transparent;
  margin-right: 0;
  margin-left: 10px;
}

.modal .carousel-indicators > li.active {
  background: #fff;
}

.modal .close, .modal .carousel-control-prev, .modal .carousel-control-next {
  opacity: 1;
}

@media (min-width: 992px) {
  .modal .carousel-control-prev {
    left: -140px;
  }

  .modal .carousel-control-next {
    right: -140px;
  }
}


/* modal mods */
.modal {
  background: rgba(34, 49, 63, 0.9);
}

.modal-dialog {
  max-width: 80% !important;
}

.modal-header {
  border: none !important;
}

.modal-content {
  border: none !important;
  border-radius: 0 !important;
  background-color: transparent !important;
}

.modal-body {
  padding: 0 !important;
}

.close img {
  max-width: 40px;
  max-height: 40px;
}

.modal-footer {
  padding: 2rem 0;
  border: none !important;
}



/* bootstrap mod addons */
.w-90 {
  width: 97%;
}

.col-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xl-5 {
  position: relative;
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
}

.col-5 {
  flex: 0 0 20%;
  max-width: 20%;
}

@media (min-width: 576px){
  .col-sm-5 {
    flex: 0 0 20%;
    max-width: 20%;
  }
}
@media (min-width: 768px){
  .col-md-5 {
    flex: 0 0 20%;
    max-width: 20%;
  }
}
@media (min-width: 992px){
  .col-lg-5 {
    flex: 0 0 20%;
    max-width: 20%;
  }
}
@media (min-width: 1200px){
  .col-xl-5 {
    flex: 0 0 20%;
    max-width: 20%;
  }
}

/*******************HOMEPAGE CAROUSEL BRANDS*********************/

.brand-line{
    height:1px;
    background:#2c52a2;
    margin-top:100px;
    width:100%;
}

.brand-title{
    font-weight:lighter; 
    width:300px;
    margin:0 auto;
    background:white;
    text-align:center;
    top:-50px;
    position:relative;
    padding:20px;
}

@keyframes scroll {
     0% {
         transform: translateX(0);
    }
     100% {
         transform: translateX(calc(-250px * 7));
    }
}
 .slider-brands {
     background: white;
     /*box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125);*/
     height: 150px;
     margin: auto;
     overflow: hidden;
     position: relative;
     max-width: 960px;
     min-width:260;
}
 .slider-brands::before, .slider-brands::after {
     background: linear-gradient(to right, rgba(255, 255, 255, 1) 0%, rgba(255, 255, 255, 0) 100%);
     content: "";
     height: 100px;
     position: absolute;
     width: 200px;
     z-index: 2;
}
 .slider-brands::after {
     right: 0;
     top: 0;
     transform: rotateZ(180deg);
}
 .slider-brands::before {
     left: 0;
     top: 0;
}
 .slider-brands .slide-track {
     animation: scroll 40s linear infinite;
     display: flex;
     width: calc(250px * 14);
     height:150px;
}
 .slider-brands .slide {
     height: 100px;
     width: 250px;
}


/*******************PRODUCT HOMEPAGE CAROUSEL*********************/
    .slider {
      position: relative;
      overflow: hidden;
    }

    .slider__wrapper {
      display: flex;
      transition: transform 0.6s ease;
    }

    .slider__item {
      flex: 0 0 30%;
      max-width: 100%;
      border:2px solid rgba(255, 255, 255, 0.5);
    }

    .slider__control {
      position: absolute;
      top: 40%;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      color: #fff;
      text-align: center;
      opacity: 0.5;
      height: 50px;
      transform: translateY(-25%);
      background: rgba(0, 0, 0, .5);
    }

    .slider__control:hover,
    .slider__control:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: .9;
    }

    .slider__control_left {
      left: 2;
    }

    .slider__control_right {
      right: 0;
    }

    .slider__control::before {
      content: '';
      display: inline-block;
      width: 20px;
      height: 20px;
      background: transparent no-repeat center center;
      background-size: 100% 100%;
    }

    .slider__control_left::before {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .slider__control_right::before {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .slider__item>div {
      line-height: 250px;
      font-size: 100px;
      text-align: center;
    }

    /*FAQ COLLAPSE STYLES*/

    .faq-line{
        height:1px;
        background:#2c52a2;
        margin-top:100px;
        width:100%;
    }

    .faq-title{
        font-weight:lighter; 
        width:650px;
        margin:0 auto;
        background:white;
        text-align:center;
        top:-50px;
        position:relative;
        padding:20px;
    }


    .faq-toggler-title{
        display: inline-block;
        padding: 10px 0 0 0;
        font-size:16px;
    }

    /****** BLOG*********/
.blog_item {
    margin-bottom: 50px;
}
.blog_item_img {
    position: relative;
}
.blog_item_img .blog_item_date {
    position: absolute;
    bottom: -10px;
    left: 10px;
    display: block;
    color: #fff;
    background-color: #493423;
    padding: 8px 15px;
    border-radius: 5px;
}
@media (min-width: 768px){
.blog_item_img .blog_item_date {
    bottom: -20px;
    left: 40px;
    padding: 13px 30px;
}
.blog_details {
    padding: 60px 30px 35px 35px;
}
.blog_details h2 {
    font-size: 24px;
    margin-bottom: 15px;
}
}
.blog_area a {
    color: "Jost",sans-serif !important;
    text-decoration: none;
    transition: .4s;
}
.blog_details {
    padding: 30px 0 20px 10px;
    box-shadow: 0px 10px 20px 0px rgb(221 221 221 / 30%);
}
.blog_details h2 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 8px;
}
.blog_details p {
    margin-bottom: 30px;
    font-family: "Jost",sans-serif;
    color: #301A22;
    font-size: 16px;
    line-height: 30px;
    margin-bottom: 15px;
    font-weight: 400;
    line-height: 1.6;
}
.blog-info-link li {
    float: left;
    font-size: 14px;
    list-style: none;
}
.blog-info-link li a {
    color: #999999;
}
.blog-info-link .li_primero::after {
    content: "|";
    padding-left: 10px;
    padding-right: 10px;
        box-sizing: border-box;
}
.blog-info-link::after {
    content: "";
    display: block;
    clear: both;
    display: table;
}
.blog_right_sidebar .single_sidebar_widget {
    background: #fbf9ff;
    padding: 30px;
    margin-bottom: 30px;
}
.blog_right_sidebar .widget_title {
    font-size: 20px;
    margin-bottom: 40px;
}
.blog_right_sidebar .widget_title::after {
    content: "";
    display: block;
    padding-top: 15px;
    border-bottom: 1px solid #f0e9ff;
}
.media {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
}
.media {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
}
.media img {
    vertical-align: middle;
    border-style: none;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body {
    justify-content: center;
    align-self: center;
    padding-left: 20px;
}
.blog_area a {
    color: "Jost",sans-serif !important;
    text-decoration: none;
    transition: .4s;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body p {
    font-size: 14px;
    line-height: 21px;
    margin-bottom: 0px;
}
.blog_right_sidebar .popular_post_widget .post_item .media-body h3 {
    font-size: 16px;
    line-height: 20px;
    margin-bottom: 6px;
    transition: all 0.3s linear;
}

/*-------------------------------------------------*/

 

  /* Create three equal columns that floats next to each other */
  .column {
    display: none; /* Hide all elements by default */
  }

  /* Clear floats after rows */ 
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Content */
  .content {
    background-color: white;
    padding: 10px;
  }

  /* The "show" class is added to the filtered elements */
  .show {
    display: block;
  }

  /* Style the buttons */
  .filter-btn {
    border: none;
    outline: none;
    padding: 12px 16px;
    background-color: white;
    cursor: pointer;
    font-weight: bolder;
  }

  .filter-btn:hover {
    background-color: #104F9E;
    color:white;
  }

  /*---------------------------------MISION Y VISION----------------------------------*/

  .container-mision{
    height:380px;
    box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.28);
    -webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.28);
    -moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.28);padding:30px;
  }

  @media (min-width: 320px) and (max-width: 480px) {
    .container-mision{
      height:580px;
    }
  }

  /*---------------------------------HERO PAGES----------------------------------*/

  .hero-pages{
    width:100%;
    height:400px;
  }

  @media (min-width: 320px) and (max-width: 480px) {
    .hero-pages{
      height:600px;
    }
  }


  #btn-back-to-top {
    position: fixed;
    bottom: 20px;
    right: 20px;
    display: none;
  }
  .box_w{
z-index:200;
position:fixed;
left:30px;
bottom:20px;
cursor:pointer;
display:none;
}

.box_w .btn_w:hover{
opacity:0.7;
}
.box_w .btn_w a{
text-decoration: none;
color:white;
}
.box_w .btn_w{
    background-color:#25D366;
    border-radius: 50%;
    color:white;
    width:50px;
    margin:auto;
    height:50px;
    display:flex;
    justify-content: center;
    transition:all 0.3s ease;
}

.box_w .btn_w a {
    font-size:35px;
    margin:auto;
}

 </style>
</head>
<body>
<div>
    <!--<div style="width:100%;min-height:30px; max-height:50px;background:#783B7C;">
      <p style="text-align:center;color:white;font-size:13px;padding-top:5px;">Nos mantenemos actualizados con los protocolos y lineamientos del <a style="color:white;font-weight:bolder;" href="https://www.ministeriodesalud.go.cr/index.php/prensa/60-noticias-2023/1505-salud-recuerda-mantener-medidas-y-protocolos-de-higiene-para-el-inicio-del-proximo-curso-lectivo">COVID-19 2023</a></p>
    </div>-->

    <!-- header section strats -->
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="logo" style="width:15%" class="navbar-brand" href="<?=base_url?>">
              <img style="width:100%;" src="images/logo-CD.png">
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="<?=base_url?>?">Inicio <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>?pag=aboutus">Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>?pag=products">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>?#contact">Contacto</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?=base_url?>?pag=mapa">Mapa</a>
              </li>

              <div class="d-none d-sm-none d-md-none d-lg-block" style="width:1px;height:20px;background:black;margin:5px 40px 0 20px;"></div>

              <li>
                <div class="">
                  <div class="footer_social">
                  <a style="color:black;font-size:22px;" href="https://www.facebook.com/clinicadinamarcacr">
                    <i style="color:#3A559F;" class="fa fa-facebook" aria-hidden="true"></i>
                  </a>&nbsp;&nbsp;
                  <a style="color:black;font-size:22px;" href="https://wa.me/50684794545">
                    <i style="color:#29A71A;" class="fa fa-whatsapp" aria-hidden="true"></i>
                  </a>&nbsp;&nbsp;
                  <a style="color:black;font-size:22px;" href="https://www.instagram.com/clinicadinamarca/">
                    <i style="color:#AC1C8A;" class="fa fa-instagram" aria-hidden="true"></i>
                  </a>
                </div>
                </div>
              </li>
              <!--
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
              -->
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    
  </div>
 
 
   
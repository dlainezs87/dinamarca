<?php 

session_start();
unset($_SESSION['sesid']);
session_destroy();

header("Location: index.html");

?>
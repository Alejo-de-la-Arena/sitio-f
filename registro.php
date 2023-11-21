<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Minimalistc</title>
</head>
<body>
<header>
        <div class="topnav" id="myTopnav">
            <a href="./index.html" class="active">M</a>
            <a href="./historia.html">Historia</a>
            <a href="./artistas.html">Artistas emergentes</a>
            <a href="./forms.html">Forms</a>
            <a href="./noticias.html">Noticias</a>
            <a href="./museos.html">Museos</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
            </a>
            <a href="./form_login.html">Iniciar Sesion</a>
            <a href="./panel.php"><i class="fa-regular fa-user"></i></a>
        </div>
    </header>

<?php
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$usuario = $_POST['usuario'];
	$password = md5($_POST['password']);


	include("conexion.php");

	$consulta = mysqli_query($conexion, "INSERT INTO usuarios (nombre, email, usuario, clave) VALUES('$nombre','$email', '$usuario', '$password')");


	header("Location:form_login.html");

?>	

</body>
</html>
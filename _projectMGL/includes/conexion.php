<?php
// Conexión
$servidor = 'Localhost';
$usuario = 'root';
$password = 'root';
$basededatos = 'monument';


try {

	$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
} catch (Exception $e) {
	header("location: error.php");
}

mysqli_query($db, "SET NAMES 'utf8'");

// Iniciar la sesión
if (!isset($_SESSION)) {
	session_start();
}

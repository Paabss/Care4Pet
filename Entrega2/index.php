<?php
	session_start();

	require_once 'DatabaseConnection.php';

?>


<!DOCTYPE html>
<html lang="es">
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/estilo.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Landing page</title>
	</head>


	<body>

	<?php
		require 'cabecera.php';


		
		require 'DAOTipoDeMascota.php';
		require 'TipoDeMascota_t.php';
		require_once 'DatabaseConnection.php';
		
		$id = 32123;
		$nombre = "Canario";


		$tipo = new tTipoDeMascota($id, $nombre);
		(DAOTipoDeMascota::getInstance())->crearTipoDeMascota($tipo);

		$idS = 32123;
		$nombreS = "Pet";


		$tipo2 = new tTipoDeMascota($idS, $nombreS);
		(DAOTipoDeMascota::getInstance())->editarTipoDeMascota($tipo2->getId());


		/*
		// Convertir array a json
		$tiposDeMascotasJson = json_encode($tiposDeMascotas);
		$serviciosJson = json_encode($servicios);
		
		$nuevoCuidador = new tCuidador(1203472, $tiposDeMascotasJson, 4, $descripcion, $serviciosJson, $descripcion, 0);

		//(DAOCuidador::getInstance())->borrarCuidador(1203472);
		(DAOCuidador::getInstance())->crearCuidador($nuevoCuidador);
		$resultado = (DAOCuidador::getInstance())->leerUnCuidador(1203472);
		echo "Mascotas: {$resultado->getTiposDeMascotas()[0]}";
*/

	?>
	
	<!-- Contenido principal de la página de inicio -->
	<div style="padding-left: 200px; padding-right: 200px">
		<p>
			Care4Pet es una aplicación web diseñada para conectar a dueños de mascotas con cuidadores de confianza, 
			ofreciendo servicios personalizados para garantizar el bienestar de los animales. A través de esta plataforma, 
			los dueños pueden buscar cuidadores según su disponibilidad y experiencia, contratar servicios como alojamiento 
			temporal, paseos, cuidados a domicilio o visitas, y gestionar fácilmente las fechas, tarifas y requisitos 
			específicos. Los cuidadores, por su parte, pueden registrar su disponibilidad y especificar qué tipos de 
			mascotas pueden atender.
		</p>

		<p>
			La app web incluye un sistema de valoraciones y reseñas para asegurar la calidad de los servicios y la confianza 
			entre los usuarios.
		</p>

		<p>
			Care4Pet simplifica el proceso de cuidado animal con una experiencia accesible, segura y eficiente desde cualquier 
			dispositivo con conexión a internet.<br><br>
		</p>

		<img src="img/LogoCare4PetTransparente.png" alt="Logo de Care4Pet" style="display: block; margin: auto;"><br><br>
	</div>


	<?php require 'pie_pagina.php'?>
	<?php require 'aviso_legal.php'?>


	</body>

</html>
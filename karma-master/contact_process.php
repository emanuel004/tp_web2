<?php
	
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$mensaje=$_POST['mensaje'];
	$tipo_consulta=$_POST['tipo_consulta'];

	//Destinatario
	$destinatario="guillermo.or.1998@gmail.com";
	$asunto="Contacto desde la web";

	$carta="De: $nombre \n";
	$carta.="Correo: $correo \n";
	$carta.="Telefono $telefono \n";
	$carta.= "Mensaje: $mensaje \n";
	$carta.= "Mensaje: $tipo_consulta";

	//Envia mensaje

	mail($destinatario, $asunto, $carta);
	header('Location:mensaje_enviado.php');

?>
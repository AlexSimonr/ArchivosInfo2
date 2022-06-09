<?php
require_once('ClasePublicaciones.php');
$publicaciones= new publicaciones();
	$datos=$_REQUEST;
	$user=$datos['user'];
	$desc=$datos['desc'];
	$estado=$datos['estado'];
	$img=null;

	$publicaciones->store($user,$desc,$estado,$imagen);
	
	$last=$publicaciones->last_id();
 	
 	$registro=$publicaciones->show($last[0]['pub_id']);

 	echo json_encode($registro);
?>
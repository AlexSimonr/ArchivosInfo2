<?php
require_once("coneccion.php");

class publicaciones extends Conexion

{
	public function store($user,$desc,$estado,$imagen)
	{
		$fecha=date('Y-m-d');
		$hora=date('H:i:s');
		$sql="INSERT INTO publicaciones 
			  (pub_user,
			   pub_fecha,
			   pub_hora,
			   pub_desc,
			   pub_estado,
			   pub_imagen)
			  VALUES('$user',
			  	'$fecha',
			  	'$hora',
			  	'$desc',
			  	'$estado',
			  	'$imagen') ";

		return $this->connection->query($sql);
	}	
	public function last_id(){
		$result=$this->connection->query("SELECT LAST_INSERT_ID() AS pub_id");
		return $result->fetch_all(MYSQLI_ASSOC);
	}

	public function show($pub_id){
		$result=$this->connection->query("SELECT * FROM publicaciones WHERE pub_id=$pub_id");
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}
?>
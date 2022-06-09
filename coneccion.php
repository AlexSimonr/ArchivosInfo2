<?php

	class Conexion 
	 {
		public $connection;

		function __construct()
		{
			$this->connection=mysqli_connect('localhost','root','','segundo');
		}
}


?>
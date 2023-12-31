<?php
	class Conexion extends PDO
	{
		private $tipo_de_base='mysql';
		private $host='localhost:3306';
		private $nombre_de_base='mitienda_online';
		private $usuario='root';
		private $contrasena='';

		public function __construct()
		{
			try 
			{
				parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);
			} 
			catch (PDOException $ex) 
			{
				echo '<h5 style="font-size:25px; color:black; text-align:center; font-weight:600;">Ha ocurrido un error y no se pudo conectar a la BD, Detalle: '.$ex->getMessage().'</h5>';
				echo '<center><img src="img/multiplicar.png" width="330px"></center><br>';
			}
		}
	}
?>
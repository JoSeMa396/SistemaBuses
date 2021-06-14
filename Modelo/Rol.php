<?php
class Rol 
{
	
	private $idRol;
	private $nombre;

	function __construct()
	{
	}

	public function setIdRol($idRol){$this->idRol = $idRol;}
	public function setNombre($nombre){$this->nombre = $nombre;}

	public function getIdRol(){return $this->idRol;}
	public function getNombre(){return $this->nombre;}

}

?>
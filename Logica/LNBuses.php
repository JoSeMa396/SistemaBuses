<?php
    require_once("../Modelo/BDBuses.php");

	class LNBuses
	{
		private $objDBBus;

		function __construct()
		{
            $this->objDBBus = new BDBuses();
		}
		public function listaDeRutas()
		{   
			$listaDeRutas = $this->objDBBus->listaDeRutas();

			return $listaDeRutas;
		}//end function
		public function IdBus()
		{   
			$listaDeBus = $this->objDBBus->idBus();

			return $listaDeBus;
		}//end function
	}//end class
  

    //$obj = new LNListaEmpleado();<br /><b>Notice</b>:  Undefined index: idDepartamento in <b>C:\xampp\htdocs\Ejemplo2020A\Vista\UIActualizarDepartamento.php</b> on line <b>23</b><br />
    //var_dump($obj->listaDeEmpleados());
 ?>
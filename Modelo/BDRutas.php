<?php
    require_once('Conexion.php');
  
	class BDRutas
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

        public function validarRuta($salida,$llegada)
        {
            $sqlRuta = "SELECT * FROM ruta WHERE salida = :salida and llegada=:llegada";
            $cmd = $this->conexion->prepare($sqlRuta);
            $cmd->bindParam(':salida',$salida);
            $cmd->bindParam(':llegada',$llegada);
            $cmd->execute();
            
            $resultado = $cmd->fetch();

            if($resultado)
            {
                return true;
            }else{
                return false;
            }
        }

        public function registrarRutas($salida,$llegada) 
            {
        $sqlInsertarEmpleado= " 
                                INSERT INTO ruta
                                VALUES (null,:salida,:llegada);
                              ";

        try{
                $cmd = $this->conexion->prepare($sqlInsertarEmpleado);
                $cmd->bindParam(':salida', $salida);
                $cmd->bindParam(':llegada', $llegada);
                if($cmd->execute()){
                    return 1;   
                }else{
                    return 0;
                }
        }catch(PDOException $e){
            echo 'ERROR: No se logro realizar la nueva inserción - '.$e->getMesage();
            exit();
            return 0;
        }
    }//end function

	}
 ?>
<?php
    require_once('Conexion.php');
  
	class BDBuses
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

        public function registrarBus($NPlaca,$modelo,$tipoBus) 
            {
                $sqlInsertarBus= " 
                                INSERT INTO bus
                                VALUES (null,:NPlaca,:modelo,:tipoBus);
                              ";

                    try{
                        $cmd = $this->conexion->prepare($sqlInsertarBus);
                        $cmd->bindParam(':NPlaca', $NPlaca);
                        $cmd->bindParam(':modelo', $modelo);
                        $cmd->bindParam(':tipoBus', $tipoBus);
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

            public function listaDeRutas(){ 
            // realizando la consulta
                $sqlListaDeRuta = "SELECT idRutas , CONCAT_WS('-',salida,llegada) as Ruta
                                  from ruta
                                  order by salida;";
            //preparando para ejecutar la consulta.
                $cmd = $this->conexion->prepare($sqlListaDeRuta);
            //ejecuta la consulta
                $cmd->execute();
            //variable para recibir la consulta en un areglo
                $listaDeRutaConsulta = $cmd->fetchAll();
            //retornando un arreglo con la lista de empleados.
                return $listaDeRutaConsulta;
            }//end function

            public function listaDeBus(){ 
            // realizando la consulta
                $sqlListaDeBus = "SELECT idBus as IdBus
                                  from bus
                                  order by idBus";
            //preparando para ejecutar la consulta.
                $cmd = $this->conexion->prepare($sqlListaDeBus);
            //ejecuta la consulta
                $cmd->execute();
            //variable para recibir la consulta en un areglo
                $listaDeBusConsulta = $cmd->fetchAll();
            //retornando un arreglo con la lista de empleados.
                return $listaDeBusConsulta;
            }//end function

            public function validarNPlaca($NPlaca){

                $sqlIdNPlaca = "SELECT * FROM bus WHERE nPlaca = :NPlaca";
                $cmd = $this->conexion->prepare($sqlIdNPlaca);
                $cmd->bindParam(':NPlaca',$NPlaca);
                $cmd->execute();
                $NPlaca = $cmd->fetch();

                if($NPlaca)
                {
                    return true;
                }else{
                    return false;
                }
            }
            public function idBus(){
                $sqlidBus="
                select MAX(idBus) as bus from bus;
                ";
                $cmd = $this->conexion->prepare($sqlidBus);
                $cmd->execute();
                $Ultimoid = $cmd->fetch();
                return $Ultimoid;
            }

            public function registrarBusRuta($idRutas,$idBus,$horaSalida,$precio)
            {
                $sqlInsertarBus= " 
                                INSERT INTO asignarRutaBus
                                VALUES (null,:idRutas,:idBus,:horaSalida,:precio);
                              ";

                    try{
                        $cmd = $this->conexion->prepare($sqlInsertarBus);
                        $cmd->bindParam(':idRutas', $idRutas);
                        $cmd->bindParam(':idBus', $idBus);
                        $cmd->bindParam(':horaSalida', $horaSalida);
                        $cmd->bindParam(':precio', $precio);
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
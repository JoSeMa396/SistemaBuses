<?php
    require_once('Conexion.php');
    require 'Personal.php';
	class DBPersonal
	{
		private $conexion;

		function __construct()
		{
			$this->conexion =  new Conexion();
		}

 public function autentificarUsuario($usuario,$contrasenia)
        {   
            $objetoUsuario = new Empleado();
            $sqlVerificarUsuario= " select em.idEmpleado,em.idRol,em.primerNombre,em.segundoNombre,em.apellidoPaterno,em.apellidoMaterno, em.usuario, 
                em.contrasenia, em.activo
                from personal em inner join rol r
                ON em.idRol = em.idRol 
                AND (em.usuario = :usuario && em.contrasenia = :contrasenia);
                                  ";
            
            try{
                $cmd = $this->conexion->prepare($sqlVerificarUsuario);
                $cmd->bindParam(':usuario', $usuario);
                $cmd->bindParam(':contrasenia', $contrasenia);
                $cmd->execute();
                /* Ejecuta una sentencia preparada pasando un array de valores */
                /*Para este caso solamente habra un registro o nada*/
                $registroConsulta = $cmd->fetch();
             
                if($registroConsulta){

                    $objetoUsuario->setIdEmpleado($registroConsulta['idEmpleado']);
                    $objetoUsuario->setIdRol($registroConsulta['idRol']);
                    $objetoUsuario->setPrimerNombre($registroConsulta['primerNombre']);
                    $objetoUsuario->setSegundoNombre($registroConsulta['segundoNombre']);
                    $objetoUsuario->setApellidoPaterno($registroConsulta['apellidoPaterno']);
                    $objetoUsuario->setApellidoMaterno($registroConsulta['apellidoMaterno']);
                    $objetoUsuario->setUsuario($registroConsulta['usuario']);
                    $objetoUsuario->setContrasenia($registroConsulta['contrasenia']);
                    $objetoUsuario->setActivo($registroConsulta['activo']);
                    return $objetoUsuario;
                }else{
                    return 0;
                }
            }catch(PDOException $e){
                echo 'ERROR: Error en la busqueda del articulo - '.$e->getMesage();
                exit();
                return false;
            };
        }//end function

	}
 ?>
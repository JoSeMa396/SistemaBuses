<?php
	require_once("../Modelo/BDRutas.php");
    $objetoRutas = new BDRutas();
    //echo "ci ".$_POST['ci'];
    //echo "ci ".$_GET['ci'];
    
    
    
    $salida=$_REQUEST['salida']; 
    $llegada=$_REQUEST['llegada'];
    $verificarRuta=$objetoRutas->validarRuta($_REQUEST['salida'],$_REQUEST['llegada']);
    if($salida==$llegada){
        echo "Datos iguales";
       }else{
         if ($verificarRuta) {
                 echo "ruta existente";
            }else{
                 $exitoRegistro = $objetoRutas->registrarRutas($salida,
                                                     $llegada
                                                        );
            }
    }



?>
<br>
<h3 title = "Volver"> <a href="../Vista/Administrador.php">CLICK PARA VOLVER</a></h3>

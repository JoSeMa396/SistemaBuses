<?php
	require_once("../Modelo/BDBuses.php");
    $objetoBus = new BDBuses();
    echo $_REQUEST['idBus'];
 
            $exitoRegistro = $objetoBus->registrarBusRuta($_REQUEST['idRutas'],
                                                        $_REQUEST['idBus'],                          
                                                        $_REQUEST['horaSalida'],
                                                        $_REQUEST['precio']
                                                        );
                if($exitoRegistro==1){
                    
                    echo "El bus a sido registrado";

                        //var_dump($exitoRegistro);
                }else{
                    echo "Bus No registrado";
                }

    
    
?>
<br>
<h3 title = "Volver Lista Empleados"> <a href="../Vista/Administrador.php">CLICK PARA VOLVER</a></h3>
<?php
	require_once("../Modelo/BDBuses.php");
    $objetoBus = new BDBuses();
    
    $verificarNPlaca=$objetoBus->validarNPlaca($_REQUEST['NPlaca']);
    if($verificarNPlaca){
        echo "placa existente";
        }else{
            $exitoRegistro = $objetoBus->registrarBus(strtoupper($_REQUEST['NPlaca']),
                                                        $_REQUEST['modelo'],                          
                                                        $_REQUEST['tipoBus']
                                                        );
                if($exitoRegistro==1){
                    
                    echo "El bus a sido registrado";
                        header("Location: ../Vista/IURegistrarRutaBus.php");

                }else{
                    echo "Bus No registrado";
                }
        }

    
    
?>
<br>
<h3 title = "Volver"> <a href="../Vista/Administrador.php">CLICK PARA VOLVER</a></h3>

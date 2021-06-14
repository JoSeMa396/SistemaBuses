<?php
require_once("../Modelo/BDPersonal.php");

    $objetoDBEmpleado = new DBPersonal();
    if(isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia'])){
    $autentificacionUsuario= $objetoDBEmpleado->autentificarUsuario($_REQUEST['usuario'],
                                                                    $_REQUEST['contrasenia']
                                                                    );
                                                                    
   if($autentificacionUsuario){
            echo 'Bienvenido Administrador';
        include '../Vista/Administrador.php';
          header('Location: ../Vista/Administrador.php');
    }else{
          //echo 'Usuario No existe comuniquese con el administrador';
          
    ?>
    <html>
<head>
   <meta charset="utf-8">
   <title>Mostrar Ventane Modal de forma Automático</title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <script>
      $(document).ready(function()
      {
         $("#mostrarmodal").modal("show");
      });
    </script>
</head>
<body>
   <div class="modal fade" id="mostrarmodal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
              <h3>Credenciales Invalidas</h3>
           </div>
           <div class="modal-body">
              <h4>Usuario y/o contraseña incorrectos</h4>
       </div>
           <div class="modal-footer">
          <a href="../Vista/login.php" class="btn btn-danger">Cerrar</a>
           </div>
      </div>
   </div>
</div>
</body>
</html>

    <?php      
    }
    }
    ?>

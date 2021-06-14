<?php
require_once("../Logica/LNBuses.php");
$objLNRutas = new LNBuses();

$listaRutas = $objLNRutas->listaDeRutas();
$IDBus = $objLNRutas->IdBus();
// var_dump($IDBus['bus']);
//echo $IDBus;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Css-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <!--Java Script-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
          <!--JQUERY-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--popper-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      
    <link rel="stylesheet" href="../css/vistaBus.css">
    <title>ASIGNAR BUSES Y RUTAS</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Bienvenido Administrador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item ">
        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Ruta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Vista/RegistrarRutas.php">Registrar</a>
          <a class="dropdown-item" href="#">Ver Rutas</a>
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bus
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../Vista/IURegistrarBuses.php">Registrar</a>
          <a class="dropdown-item" href="#">Ver Buses</a>
        </div>
      </li>

      <!-- <li class="nav-item ">
        <a class="nav-link" href="../Vista/IURegistrarRutaBus.php">Asignar Ruta Bus <span class="sr-only">(current)</span></a>
      </li> -->
     
    </ul>
    <form action="../Vista/login.php">
     
      <button class="btn btn-danger" type="submit">Cerrar sesion</button>
    </form>
  </div>
</nav>
<!-- FIN DE NAVBAR -->

<h1>Asignar Ruta Bus</h1>

<!-- FORMULARIO -->
<form action="../Logica/LNRegistrarBusRuta.php" method="post" name="">
  <div class="row">
    <div class="col-sm-4"></div>
    <div class="col-sm-4">
      <!-- <div class="form-group row">
        <label for="bus" class="col-sm-3 col-form-label">BUS:</label>
        <div class="col-sm-6">
          <select class="form-control" id="bus">
            <option>1234QWER</option>
            <option>5678TYUI</option>
            <option>ABCD4321</option>
          </select>
        </div>
      </div> -->
      <div class="form-group row">
        <label for="idRutas" class="col-sm-3 col-form-label">RUTA:</label>
        <div class="col-sm-6">
          <select class="form-control" id="idRutas" name="idRutas" required >
            <?php foreach($listaRutas as $registroRutas){?>
              <option value="<?php echo $registroRutas['idRutas']; ?>"><?php echo $registroRutas['Ruta'];?></option>
            <?php } ?>
          </select>
        </div>
      </div>
      <input type="hidden" value="<?php echo $IDBus['bus'];?>" name="idBus">
      <div class="form-group row">
        <label for="horaSalida" class="col-sm-3 col-form-label">HORA SALIDA:</label>
        <div class="col-sm-6">
          <input type="time" class="form-control" name="horaSalida" id="horaSalida" placeholder="INGRESE...">
        </div>
      </div>
      <div class="form-group row">
        <label for="precio" class="col-sm-3 col-form-label">PRECIO:</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="precio" id="precio" placeholder="INGRESE PRECIO...">
        </div>
      </div>
    </div>
    <div class="col-sm-4"></div>
  </div>
  <div class="row">
    <div class="col-sm-5">
    </div>
    <div class="col-sm-3">
      <button type="submit" class="btn btn-danger">Registrar</button>
      <button type="reset" class="btn btn-danger">Cancelar</button>
    </div>
  </div>
</form>
<!-- FIN FORMULARIO -->

</body>
</html>
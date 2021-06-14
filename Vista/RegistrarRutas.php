<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <!--JQUERY-->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <!--popper-->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!--Java Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/vistaRuta.css">
    <title>Rutas</title>
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
        <a class="nav-link" href="../Vista/IUAsignarRutaBus.php">Asignar Ruta Bus <span class="sr-only">(current)</span></a>
      </li> -->
     
    </ul>
    <form action="../Vista/login.php">
     
      <button class="btn btn-danger" type="submit">Cerrar sesion</button>
    </form>
  </div>
</nav>

<h1>Registro de rutas</h1>

<!-- sugerencia -->
<form action="../Logica/LNRegistrarRuta.php" method="post" name="">
  <div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-3">
      <div class="form-group row">
        <label for="salida" class="col-sm-2 col-form-label">SALIDA:</label>
        <div class="col-sm-10">
          <select class="form-control" id="salida" name="salida">
            <option value="Santa cruz">Santa Cruz</option> 
            <option value="Beni">Beni</option> 
            <option value="La paz">La Paz</option>
            <option value="Cochabamba">Cochabamba</option> 
            <option value="Tarija">Tarija</option> 
            <option value="Oruro">Oruro</option> 
            <option value="Chuquisaca">Chuquisaca</option> 
            <option value="Pando">Pando</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="form-group row">
        <label for="llegada" class="col-sm-2 col-form-label">LLEGADA:</label>
        <div class="col-sm-10">
          <select class="form-control" id="llegada" name="llegada">
            <option value="Santa cruz">Santa Cruz</option> 
            <option value="Beni">Beni</option> 
            <option value="La paz">La Paz</option>
            <option value="Cochabamba">Cochabamba</option> 
            <option value="Tarija">Tarija</option> 
            <option value="Oruro">Oruro</option> 
            <option value="Chuquisaca">Chuquisaca</option> 
            <option value="Pando">Pando</option>
          </select>
        </div>
      </div>
    </div>
    <div class="col-sm-3"></div>
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
<!-- fin sugerencia -->


</body>
</html>
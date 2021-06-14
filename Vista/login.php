<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Java Script-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Los iconos tipo Solid de Fontawesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
   <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

    <link href="../css/vista.css" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Iniciar Sesion</h1>
    </div>
    <!--<section class="container-fluid slider d-flex justify-content-center align-items-center">
          <h1 class="display-4">Iniciar Sesion</h1>
      </section> -->


    <div class="modal-dialog text-center">
        <div class="col-sm-8 main-section">
            <div class="modal-content">
                <div class="col-12 user-img">
                    <img src="../img/usuario.jpg">
                </div>
                <form class="col-12" action="../Logica/LNLogin.php" method="post" name="login">
                    <div class="form-group" id="user-group">
                        <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario" required="Completa este campo">
                    </div>
                    <div class="form-group" id="contrasenia-group">
                        <input type="password" name="contrasenia" class="form-control" placeholder="Contrasenia" required="Completa este campo">
                    </div>
                    <button type="submit" class="btn btn-danger" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eje"><i class="fas fa-sign-in-alt" ></i>Ingresar</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php

session_start();

if($_POST){
  $mensaje = "Usuario o contraseña incorrectos";

  if($_POST['usuario']=='admin' && $_POST['password']=='admin'){
    $_SESSION['usuario'] = $_POST['usuario'];
    header('location:secciones/index.php');
  }
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#b5dff0" />
    <meta name="description" content="Generador de certificados | Login" />
    <link rel="icon" href="src/assets/icons/favicon.png" />
    <link rel="favicon" href="src/assets/icons/favicon.png" />
    <link rel="apple-touch-icon" href="src/assets/icons/favicon.png" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
	  <link rel="stylesheet" type="text/css" href="src/styles/index.css" />
    <title>Generador de certificados | Login</title>
  </head>
  <body class="select-none bg-light">

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4"></div>

        <div class="col-md-4">
          <form action="" method="post">
            <div class="card mt-4">
              <div class="card-header">
                Inicio de sesión
              </div>
              <div class="card-body">
                <?php if(isset($mensaje)){ ?>
                  <div class="alert alert-danger" role="alert">
                    <strong><?php echo $mensaje; ?></strong>
                  </div>
                <?php }?>
                <div class="mb-3">
                  <input
                    class="form-control"
                    type="text"
                    name="usuario"
                    id="usuario"
                    placeholder="Usuario"
                    autocomplete="off"
                    required
                  />
                  <small class="form-text text-muted" >Escriba su usuario</small>
                </div>

                <div class="mb-3">
                  <input
                    class="form-control"
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Contraseña"
                    autocomplete="off"
                    required
                  />
                  <small class="form-text text-muted" >Escriba su contraseña</small>
                </div>

                <button type="submit" class="btn btn-primary">Iniciar sesión</button>
              </div>
            </div>
          </form>
        </div>

        <div class="col-md-4"></div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
  </body>
</html>
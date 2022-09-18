<!-- AQUI ESTA LA ESTUCTURA DE NUESTRO LOGIN -->

<?php
session_start();
if($_POST){
  $mensaje='Usuario o Contraseña Incorrectos';
  if($_POST['usuario']=='admin' && $_POST['password']=='admin'){
    $_SESSION['ususario']=$_POST['usuario'];
    echo "Login Correcto";
    header('Location: secciones/index.php');
  }
    $mensaje='Usuario o Contraseña Incorrectos';
  
}
?>

<!doctype html>
<html lang="en">

<head>
  <title>Tittle</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.0-beta1 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
<!-- DIV CLASE CONTAAINER DONDE ESTARA TODO NUESTRO CONTENIDO -->

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-8">
            <br>
            <form action="" method="post"> <!-- EN ESTE FORM LE INDICAMOS A DONDE LLEVARNOS DESPUES DE LOGUEARNOS -->
              <div class="card">
                <div class="card-header">
                  Inicio de Sesion
                </div>
                <div class="card-body">

                  <?php if(isset($mensaje)) {?>
                    <div class="alert alert-danger" role="alert">
                      <strong><?php echo $mensaje; ?></strong>
                    </div>
                  <?php } ?>
                  <!-- DENTRO DEL CAR TENEMOS ESTE INPUT PARA LA CAJA DE TEXTO 
                  DONDE EL USUARIO PONE EN ESTE CASO SU USUARIO Y CONTRASEÑA-->
                  <div class="mb-3">
                    <label for="" class="form-label">Usuario</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" aria-describedby="helpId" placeholder="usuario">
                    <small id="helpId" class="form-text text-muted">Escriba su usuario</small>
                  </div>

                  <div class="mb-3">
                    <label for="" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="password" id="contrasenia" aria-describedby="helpId" placeholder="password">
                    <small id="helpId" class="form-text text-muted">Escriba su contraseña</small>
                  </div>
                  <!-- AQUI TENEMOS LA PARTE DE INICIO DE SESION CON NUESTRO BOTON -->
                  <button type="submit" class="btn btn-primary">Iniciar sesion</button>
            </form> <!-- AQUI CERRAMOS EL FORM QUE ES DONDE TERMINA LA ETIQUETA CAR -->
          </div>
        </div>

      </div>
    </div>



    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>
<!-- AQUI INCLUIMOS LA CABECERA Y EL PIE QUE PONDREMOS DENTRO DE TODO NUESTRO CONTENIDO
QUE EN NUESTRO CASDO TENDRA LIBRERIS BOOTSTRAP QUE DESPUES SE MODIFICAN -->

<?php include('../templates/cabecera.php'); ?> <!-- AQUI LLAMAMOS A NUESTRA CABECERA -->

<!-- VAMOS A AGREGAR UHN MENU CON SOLO INFORMACION EN UN DIV TIPO CONTAINER
RECORDANDO QUE EN LA CABECERA IRA NUESTRO INICIO  Y EN EL PIE NUESTRO CIERRE 
DE TAL FORMA QUE TODO LO QUE ESTE EN MEDIO SEA EL CONTENIDO DE NUESTRO CONTAINER-->

      <div class="p-5 bg-light">
            <div class="container">
                  <h1 class="display-3">Bienvenid@ al REMAKE de SofiaPlus</h1>
                  <p class="lead">Aqui podras generarar tus certificados</p>
                  <hr class="my-2">
                  <p>Inicia y conoce nuestras mejoras</p>
                  <p class="lead">
                        <a class="btn btn-primary btn-lg" href="vista_alumnos.php" role="button">Iniciar</a>
                  </p>
            </div>
      </div>

<?php include('../templates/pie.php'); ?> <!-- AQUI LLAMAMOS A NUESTRO PIE
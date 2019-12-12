<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>

    <!-- Cargar dashboard_view -->
    <?php
      $this->load->view('dashboard_view');
    ?>

    <div class="container">
      <br>
      <!-- Si la cuenta es de nivel 1 deja acceder al contenido -->
      <?php if($this->session->userdata('level')==='1'):?>
        <h1>¡¡Hola!!</h1>
        <p>Puedes acceder al contenido</p>
        <p>CONTENIDO...</p>
        <p>CONTENIDO...</p>
      <!-- Si no, muestra el mensaje "Acceso denegado" -->
      <?php else:?>
        <h1>Acceso denegado. Necesitas un usuario de Nivel 1</h1>
      <?php endif;?>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
       integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
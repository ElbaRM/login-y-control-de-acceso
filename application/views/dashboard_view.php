<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark"">
        <a class="navbar-brand" href="#">LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
                <!-- MENU PARA NIVEL 1 -->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>page/index">Dashboard 1</a></li>
                  <!-- Link a la función posts dentro del controller Page.php -->
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>page/posts">Posts</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#">Pages</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#">Media</a></li>
                <!-- MENU PARA NIVEL 2 -->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>page/staff">Dashboard Staff</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#">Pages</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#">Media</a></li>
                <!-- MENU PARA NIVEL 3 -->
                <?php else:?>
                  <li class="nav-item active"><a class="nav-link" href="<?php echo base_url();?>page/author">Dashboard Author</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#">Posts de autores</a></li>
                <?php endif;?>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <p class="navbar-text px-2">Bienvenido/a <?php echo $this->session->userdata('username');?>
                <ul class="nav navbar-nav navbar-right">
                <li class="nav-item active"><a class="nav-link btn btn-outline-secondary" href="<?php echo site_url('login/logout');?>">Cerrar sesión</a></li>
              </form>
              </ul>
            </div>
          </div>
        </nav>
     </div>
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
       integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
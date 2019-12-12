<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Desplegar navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--MENU PARA NIVEL 1-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a href="<?php echo base_url();?>page/index">Dashboard</a></li>
                  <li><a href="<?php echo base_url();?>page/posts">Posts</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--MENU PARA NIVEL 2-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a href="<?php echo base_url();?>page/staff">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--MENU PARA NIVEL 3-->
                <?php else:?>
                  <li class="active"><a href="<?php echo base_url();?>page/author">Dashboard</a></li>
                  <li><a href="#">Posts de autores</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Cerrar sesión</a></li>
              </ul>
            </div>
          </div>
        </nav>
 
        <div class="jumbotron">
          <h1>Bienvenido/a <?php echo $this->session->userdata('username');?></h1>
        </div>
 
      </div>
    </div>
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
       integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" 
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
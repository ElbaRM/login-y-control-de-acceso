<?php
class Page extends CI_Controller {
  function __construct() {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('login');
    }
  }
 
  function index() {
    // Permitir acceso solo a admin
      if ($this->session->userdata('level')==='1') {
          $this->load->view('dashboard_view');
      } else {
          echo "Acceso denegado. Solo para usuario de Nivel 1";
      }
 
  }

  // Función para cargar la vista de prueba de posts
  function posts() {
    $this->load->view('posts_view');
  }
 
  function staff() {
    // Permitir acceso solo a staff
    if($this->session->userdata('level')==='2'){
      $this->load->view('dashboard_view');
    } else {
        echo "Acceso denegado. Solo para usuario de Nivel 2";
    }
  }
 
  function author() {
    // Permitir acceso solo a author
    if ($this->session->userdata('level')==='3') {
      $this->load->view('dashboard_view');
    } else {
        echo "Acceso denegado. Solo para usuario de Nivel 3";
    }
  }
 
}
?>
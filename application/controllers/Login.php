<?php
class Login extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('login_model');
  }
 
  function index() {
    // Cargar vista de login
    $this->load->view('login_view');
  }
 
  function auth() {
    // Coger el email del input del formulario de login
    $email    = $this->input->post('email',TRUE);
    // Coger la contraseña del input del formulario de login
    $password = sha1($this->input->post('password',TRUE));
    // Validar que sea correcto
    $validate = $this->login_model->validate($email,$password);

    // Si devuelve más de 0 filas es que existe el usuario en la base de datos, así que guardamos en variables el contenido de las filas devueltas
    if ($validate->num_rows() > 0) {
        $data  = $validate->row_array();
        $name  = $data['user_name'];
        $email = $data['user_email'];
        $level = $data['user_level'];
        $sesdata = array(
            'username'  => $name,
            'email'     => $email,
            'level'     => $level,
            'logged_in' => TRUE
        );
        // Seteamos los datos de usuario
        $this->session->set_userdata($sesdata);

        // access login for admin
        if($level === '1'){
            redirect('page');
 
        // access login for staff
        }elseif($level === '2'){
            redirect('page/staff');
 
        // access login for author
        }else{
            redirect('page/author');
        }
    } else {
        // 
        echo $this->session->set_flashdata('msg','Usuario o contraseña incorrectos');
        redirect('login');
    }
  }
 
  function logout() {
      $this->session->sess_destroy();
      redirect(base_url());
  }
 
}

?>
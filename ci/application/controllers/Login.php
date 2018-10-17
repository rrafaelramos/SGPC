
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function login()
  {
    // Carrega os dados recebidos por POST
    $func['login'] = $this->input->post('login');
    $func['senha'] = $this->input->post('senha');
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Recebe os dados do model
    if($funcionario->login($func)){
      $this->session->set_userdata(array("login"=>$func['login'], "logado"=>true));
    }else{
      echo "Erro ao logar!";
    }

    //$this->load->view('welcome_message');
  }

  public function verify_login()
  {
    if($this->session->userdata('logado')){
      echo "Válido! Usuário logado!";
    }else{
      echo "Erro ao logar!";
    }

    //$this->load->view('welcome_message');
  }

  public function logout()
  {
      $this->session->set_userdata('login', '');
      $this->session->set_userdata('logado', false);
      // destroy session
      $this->session->sess_destroy();
  }

}

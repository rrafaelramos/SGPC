<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
$this->load->view('login');
	}

  public function entrar()
  {
    // Carrega os dados recebidos por POST
    $func['login'] = $this->input->post('login');
    $func['senha'] = $this->input->post('senha');
    // Carrega o model
    $this->load->model('Login_Model', 'funcionario');
    // Recebe os dados do model
    $dados = $this->funcionario->getFuncionario($func);
    $funcao = null;
    foreach ($dados as $line) {
      $funcao = $line->departamento;
      break;
    }
    if($funcao!=null){
      $this->session->set_userdata(array("login"=>$func['login'], "logado"=>true, "departamento"=> $funcao));
      $this->load->view('admin');
    }else{
      echo "Falha ao logar";
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
      $this->session->unset_userdata('login');
      $this->session->unset_userdata('logado');
      $this->session->unset_userdata('departamento');
      // destroy session
      $this->session->sess_destroy();
  }

}

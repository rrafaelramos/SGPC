<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function create()
	{
    // Carrega os dados recebidos por POST
    $func['nome'] = $this->input->post('nome');
    $func['email'] = $this->input->post('email');
    $func['login'] = $this->input->post('login');
    $func['rua'] = $this->input->post('rua');
    $func['numero'] = $this->input->post('numero');
    $func['bairro'] = $this->input->post('bairro');
    $func['cidade'] = $this->input->post('cidade');
    $func['referencia'] = $this->input->post('referencia');
    $func['complemento'] = $this->input->post('complemento');
    $func['departamento'] = $this->$funcionario->input->post('departamento');
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Tenta persistir os dados
    if($this->funcionario->create($func)){
      echo "Cadastrado com sucesso!";
    }else{
      echo "Erro ao cadastrar!";
    }

		//$this->load->view('welcome_message');
	}

public function  show_data($id){

    $this->load->view('editar_usuario');

}
	public function update()
	{
    // Carrega os dados recebidos por POST
    $func['id'] = $this->input->post('id');
    $func['nome'] = $this->input->post('nome');
    $func['email'] = $this->input->post('email');
    $func['login'] = $this->input->post('login');
    $func['rua'] = $this->input->post('rua');
    $func['numero'] = $this->input->post('numero');
    $func['bairro'] = $this->input->post('bairro');
    $func['cidade'] = $this->input->post('cidade');
    $func['referencia'] = $this->input->post('referencia');
    $func['complemento'] = $this->input->post('complemento');
    $func['departamento'] = $this->input->post('departamento');
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Tenta persistir os dados
    if($this->funcionario->update($func)){
      echo "Atualizado com sucesso!";
    }else{
      echo "Erro ao atualizar!";
    }

		//$this->load->view('welcome_message');
	}

  public function get_all()
	{
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Recebe os dados do model
    $func['funcionarios'] = $this->funcionario->list();

    foreach ($func as $line) {
      echo $line->nome."<br/>";
    }
    return $func;

	}
  public function listar_todos(){
	    $func =$this->get_all()
        $this->load->view('lista_usuario', $func);
  }

  public function get_filter()
	{
    // Carrega os dados recebidos por POST
    $dados['filtro'] = $this->input->post('filtro');
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Recebe os dados do model
    $func['funcionarios'] = $this->funcionario->list_filter($dados);

    foreach ($func as $line) {
      echo $line->nome."<br/>";
    }

		//$this->load->view('welcome_message', $func);
	}

  public function delete()
	{
    // Carrega os dados recebidos por POST
    $func['id'] = $this->input->post('id');
    // Carrega o model
    $this->load->model(Funcionarios_Model, 'funcionario');
    // Recebe os dados do model
    if($this->funcionario->delete($func)){
      echo "Deletado com sucesso!";
    }else{
      echo "Erro ao deletar!";
    }

		//$this->load->view('welcome_message');
	}
}

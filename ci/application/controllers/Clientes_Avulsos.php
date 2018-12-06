<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes_Avulsos extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

  public function create()
	{
    // Carrega os dados recebidos por POST
    $func['nome'] = $this->input->post('nome');
    $func['telefone'] = $this->input->post('telefone');
    $func['nascimento'] = $this->input->post('nascimento');
    $func['cep'] = $this->input->post('cep');
    $func['cpf'] = $this->input->post('cpf');
    $func['rg'] = $this->input->post('rg');
    $func['rua'] = $this->input->post('rua');
    $func['numero'] = $this->input->post('numero');
    $func['bairro'] = $this->input->post('bairro');
    $func['cidade'] = $this->input->post('cidade');
    $func['referencia'] = $this->input->post('referencia');
    $func['complemento'] = $this->input->post('complemento');
    // Carrega o model
    $this->load->model(ClientesAvulsos_Model, 'clientes');
    // Tenta persistir os dados
    if($this->clientes->create($func)){
      echo "Cadastrado com sucesso!";
    }else{
      echo "Erro ao cadastrar!";
    }

		//$this->load->view('welcome_message');
	}

public function  show_data($id){
		$this->load->model('ClientesAvulsos_Model', 'clientes');
		$resultado['clientes'] = $this->clientes->get_filter($id);
		$this->load->view('editar_clientes', $resultado);

}
	public function update()
	{
    // Carrega os dados recebidos por POST
    $func['id'] = $this->input->post('id');
    $func['nome'] = $this->input->post('nome');
    $func['telefone'] = $this->input->post('telefone');
    $func['nascimento'] = $this->input->post('nascimento');
    $func['cep'] = $this->input->post('cep');
    $func['cpf'] = $this->input->post('cpf');
    $func['rg'] = $this->input->post('rg');
    $func['rua'] = $this->input->post('rua');
    $func['numero'] = $this->input->post('numero');
    $func['bairro'] = $this->input->post('bairro');
    $func['cidade'] = $this->input->post('cidade');
    $func['referencia'] = $this->input->post('referencia');
    $func['complemento'] = $this->input->post('complemento');
    // Carrega o model
    $this->load->model('ClientesAvulsos_Model', 'clientes');
    // Tenta persistir os dados
    if($this->clientes->update($func)){
      echo "Atualizado com sucesso!";
    }else{
      echo "Erro ao atualizar!";
    }

		//$this->load->view('welcome_message');
	}

  public function get_all()
	{
    // Carrega o model
    $this->load->model('ClientesAvulsos_Model', 'clientes');
    // Recebe os dados do model
    $func = $this->clientes->get_all();

    foreach ($func as $line) {
      //echo $line->nome."<br/>";
    }
    return $func;

	}
  public function listar_todos(){
	    $func['clientes'] =$this->get_all();
        $this->load->view('lista_clientes', $func);
  }

  public function get_filter()
	{
    // Carrega os dados recebidos por POST
    $dados['filtro'] = $this->input->post('filtro');
    // Carrega o model
    $this->load->model('ClientesAvulsos_Model', 'clientes');
    // Recebe os dados do model
    $func['clientes'] = $this->clientes->list_filter($dados);

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
    $this->load->model('ClientesAvulsos_Model', 'clientes');
    // Recebe os dados do model
    if($this->clientes->delete($func)){
      echo "Deletado com sucesso!";
    }else{
      echo "Erro ao deletar!";
    }

		//$this->load->view('welcome_message');
	}
}

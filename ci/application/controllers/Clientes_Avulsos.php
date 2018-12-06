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
    $func['nome'] = 'caio';
    $func['telefone'] = '123342432';
    $func['nascimento'] = '2018-05-09';
    $func['cep'] = '1518547';
    $func['cpf'] = '156165615161';
    $func['rg'] = '1561616';
    $func['rua'] = 'dsafdsa';
    $func['numero'] = '151';
		$func['estado'] = 'dsadsa';
    $func['bairro'] = 'hnkjbnk';
    $func['cidade'] = 'hjgvhjgj';
    $func['referencia'] = 'ghvjgh';
    $func['complemento'] = 'ghvgv';
    // Carrega o model
    $this->load->model('ClientesAvulsos_Model', 'clientes');
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
    $func['id'] = 4;
		$func['nome'] = 'marco';
    $func['telefone'] = '123342432';
    $func['nascimento'] = '2018-05-09';
    $func['cep'] = '1518547';
    $func['cpf'] = '156165615161';
    $func['rg'] = '1561616';
    $func['rua'] = 'dsafdsa';
    $func['numero'] = '151';
		$func['estado'] = 'dsadsa';
    $func['bairro'] = 'hnkjbnk';
    $func['cidade'] = 'hjgvhjgj';
    $func['referencia'] = 'ghvjgh';
    $func['complemento'] = 'ghvgv';
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
    $func['id'] = 1;
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

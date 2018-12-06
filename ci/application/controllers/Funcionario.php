<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function show_cadastro()
	{
		$this->load->view('cadastro_usuario');
	}
  public function create()
	{
    // Carrega os dados recebidos por POST
    $func['nome'] = $this->input->post('nome');
    $func['email'] = $this->input->post('email');
    $func['login'] = $this->input->post('login');
		$func['senha'] = $this->input->post('senha');
    $func['rua'] = $this->input->post('rua');
    $func['numero'] = $this->input->post('numero');
    $func['bairro'] = $this->input->post('bairro');
    $func['cidade'] = $this->input->post('cidade');
		$func['estado'] = $this->input->post('estado');
    $func['referencia'] = $this->input->post('referencia');
    $func['complemento'] = $this->input->post('complemento');
    $func['departamento'] = $this->input->post('departamento');
		$func['aceito'] = 0;
		$func['ativo'] = 0;
    // Carrega o model
    $this->load->model("Funcionarios_Model", 'funcionario');
    // Tenta persistir os dados
    if($this->funcionario->create($func)){
      echo "Cadastrado com sucesso!";
    }else{
      echo "Erro ao cadastrar!";
    }
	//	$this->load->view('listar_solicitacoes');
		$this->show_solicitacoes();
	}

public function  show_data($id){
		$this->load->model('Funcionarios_Model', 'funcionarios');
		$resultado['funcionario'] = $this->funcionarios->get_filter(array('campo'=>'id','valor'=>$id));
		$this->load->view('editar_usuario', $resultado);

}
public function  show_solicitacoes(){
	  $dados['campo']='aceito';
		$dados['valor']=0;
		$this->load->model('Funcionarios_Model', 'funcionario');
		$func['funcionarios'] = $this->funcionario->get_filter($dados);
	  $this->load->view('listar_solicitacoes', $func);
}
public function  aceitar_solicitacao($id){
		$func['aceito'] = 1;
		$func['ativo'] = 1;
		$func['id'] = $id;
		$this->load->model('Funcionarios_Model', 'funcionario');
    // Tenta persistir os dados
    if($this->funcionario->update($func)){
      echo "Aceito com sucesso!";
    }else{
      echo "Erro ao aceitar!";
    }
}

public function  remover_usuario($id){
		$func['aceito'] = 0;
		$func['ativo'] = 0;
		$func['id'] = $id;
		$this->load->model('Funcionarios_Model', 'funcionario');
    // Tenta persistir os dados
    if($this->funcionario->update($func)){
      echo "Removido com sucesso!";
    }else{
      echo "Erro ao Remover!";
    }
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
    $this->load->model('Funcionarios_Model', 'funcionario');
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
    $this->load->model('Funcionarios_Model', 'funcionario');
    // Recebe os dados do model
    $func = $this->funcionario->get_all();

    foreach ($func as $line) {
      //echo $line->nome."<br/>";
    }
    return $func;

	}
  public function listar_todos(){
			$dados['campo']='aceito';
			$dados['valor']=1;
			$this->load->model('Funcionarios_Model', 'funcionario');
			$func['funcionarios'] = $this->funcionario->get_filter($dados);
      $this->load->view('lista_usuario', $func);
  }

  public function get_filter($filtro, $campo)
	{
    // Carrega os dados recebidos por POST
    $dados['valor'] = $filtro;//$this->input->post('filtro');
		$dados['campo'] = $campo;
    // Carrega o model
    $this->load->model('Funcionarios_Model', 'funcionario');
    // Recebe os dados do model
    $func['funcionarios'] = $this->funcionario->get_filter($dados);
		return $func;
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

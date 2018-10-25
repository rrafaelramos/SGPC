<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperar_Credencial extends CI_Controller {

    public function index() {
        $this->load->view('recuperar_credencial');
    }

    public function validacao() {
        $func['email'] = $this->input->post('email');

        $this->load->model(Funcionarios_Model, 'funcionario');


        if ($funcionario->validacao($func)) {
            $func['token'] = md5($func['email']);

            // Carrega a library email
            $this->load->library('email');

            //Inicia o processo de configuração para o envio do email
            $config['protocol'] = 'mail'; // define o protocolo utilizado
            $config['wordwrap'] = TRUE; // define se haverá quebra de palavra no texto
            $config['validate'] = TRUE; // define se haverá validação dos endereços de email
            $config['mailtype'] = 'html';

            // Inicializa a library Email, passando os parâmetros de configuração
            $this->email->initialize($config);

            // Define remetente e destinatário
            $this->email->from('sgpc@email.com', 'Remetente'); // Remetente
            $this->email->to($func['email'], 'Usuario'); // Destinatário
            // Define o assunto do email
            $this->email->subject('Recuperação de credencial');

            $this->email->message($this->load->view('email-template', $func, TRUE));
           
            if ($this->email->send()) {
                $mensagem = "Email enviado com sucesso!";
                $this->load->view('sucesso',  $mensagem);
            } else {
                $mensagem = "Falha ao enviar e-mail";
                $this->load->view('falha', $mensagem);
            }
        } else {
            $mensagem = "Usuário não encontrado";
            $this->load->view('recuperar_credencial', $mensagem);
        }
    }

    public function update() {
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
        if ($funcionario->update($func)) {
            echo "Atualizado com sucesso!";
        } else {
            echo "Erro ao atualizar!";
        }

        //$this->load->view('welcome_message');
    }

    public function get_all() {
        // Carrega o model
        $this->load->model(Funcionarios_Model, 'funcionario');
        // Recebe os dados do model
        $func['funcionarios'] = $funcionario->list();

        foreach ($func as $line) {
            echo $line->nome . "<br/>";
        }

        //$this->load->view('welcome_message', $func);
    }

    public function get_filter() {
        // Carrega os dados recebidos por POST
        $dados['filtro'] = $this->input->post('filtro');
        // Carrega o model
        $this->load->model(Funcionarios_Model, 'funcionario');
        // Recebe os dados do model
        $func['funcionarios'] = $funcionario->list_filter($dados);

        foreach ($func as $line) {
            echo $line->nome . "<br/>";
        }

        //$this->load->view('welcome_message', $func);
    }

    public function delete() {
        // Carrega os dados recebidos por POST
        $func['id'] = $this->input->post('id');
        // Carrega o model
        $this->load->model(Funcionarios_Model, 'funcionario');
        // Recebe os dados do model
        if ($funcionario->delete($func)) {
            echo "Deletado com sucesso!";
        } else {
            echo "Erro ao deletar!";
        }

        //$this->load->view('welcome_message');
    }

}

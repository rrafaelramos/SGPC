<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Recuperar_Credencial extends CI_Controller {

    public function index() {
        $this->load->view('recuperar_credencial');
    }

    public function valida() {
        $this->load->library('email');
        $this->load->model("Recuperar_Credencial_Model"); // chama o modelo usuarios_model
        $email = $this->input->post("email"); // pega via post o email que venho do formulario
        $dados['email'] = $email;
        $usuario = $this->Recuperar_Credencial_Model->validacao($dados); // acessa a função buscaPorEmailSenha do modelo

        if ($usuario) {
            $this->Recuperar_Credencial_Model->setToken($email);


            $mensagem = "E-mail:" . $email;
            $mensagem .= "<br>Menagem: SOLICITAÇÂO DE NOVA SENHA <br>";
            $mensagem .= "<a href='http://127.0.0.1/scpc/index.php/Recuperar_Credencial/recuperar/" . md5($email) . "/" . $usuario['id'] . "'>CLIQUE AQUI PARA RECUPERAR SUA SENHA</a>";
            $config['smtp_host'] = 'ssl://smtp.gmail.com';
            $config['smtp_port'] = '465';
            $config['smtp_user'] = 'mads20182@gmail.com';
            $config['smtp_pass'] = '2018mads';
            $config['protocol'] = 'smtp';
            $config['wordwrap'] = TRUE;
            $config['validate'] = TRUE;
            $config['mailtype'] = 'html';
            $config['charset'] = 'utf-8';
            $config['newline'] = "\r\n";

            $this->email->initialize($config);
            $this->email->from('mads2018@gmail.com', 'SGPC'); // Remetente
            $this->email->to('guilhermeviana609@gmail.com'); //destinatario
            $this->email->subject('Recuperação de senha');
            $this->email->message($mensagem);

            if ($this->email->send()) {
                echo "EMAIL ENVIADO COM SUCESSO";
            } else {
                echo "AAA";
                print_r($this->email->print_debugger());
            }
        }else{
            echo "OPS";
        }
        echo "VIEW DEFAULT";
    }

    public function recuperar($token, $id) {
        $this->load->model("funcionarios_model");
        $valida = $this->funcionarios_model->validaToken($id, $token);
        $dados = ['id' => $id];
        if ($valida) {
            echo "VALIDACAO OK";
        } else {
            echo "VALIDACAO FALHA";
        }
    }

     public function update() {
        $this->load->model("usuarios_model");
        $senha = $this->input->post("senha");
        $senha2 = $this->input->post("senha2");
        $id = $this->input->post("id");
        if ($senha === $senha2) {
            $this->usuarios_model->setSenha($senha, $id);
            echo "SUCESSO";
        } else {
            echo "SENHAS NAO SAO IGUAIS";
        }
    }


}

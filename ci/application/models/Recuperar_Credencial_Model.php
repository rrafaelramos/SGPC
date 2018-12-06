<?php

class Recuperar_Credencial_Model extends CI_Model {

    function validacao($dados) {
        $this->db->where("email =", $dados['email']);
        $this->db->or_where("login =", $dados['email']);
        return $this->db->get('funcionarios')->row_array();
    }

    public function setToken($email) {
        $this->db->where("email", $email);
        $usuario = $this->db->get("funcionarios")->row_array();
        $usuario['token'] = md5($email);
        $flag = $this->db->update('funcionarios', $usuario, array('id' => $usuario['id']));
        return $flag;
    }

    public function validaToken($id, $token) {
        $this->db->where("id", $id);
        $this->db->where("token", $token);
        $usuario = $this->db->get("funcionarios")->row_array();
        return $usuario;
    }

    function setSenha($senha, $id) {
        $flag = $this->db->update('funcionarios', array('id' => $id, 'senha' => $senha));

        return $flag;
    }

}

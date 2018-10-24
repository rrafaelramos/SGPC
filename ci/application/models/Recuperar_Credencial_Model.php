<?php

class Recuperar_Credencial_Model extends CI_Model {

    function validacao($dados) {
      $this->db->where("email =", $dados['email']);
      $this->db->or_where("login =", $dados['email']);
      return $this->db->get('funcionarios');
    }

    function setSenha($dados) {
      //$this->db->update('usuarios', ,array('id' => $dados['id']));
      $query = $this->db->query('UPDATE funcionarios SET senha = "'.$dados['senha'].'" WHERE id="'.$dados['id'].'"');
      return $query->result();
    }

}

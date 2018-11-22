<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model{

  public function getFuncionario($dados)
	{
		if ($dados!=null) {
      $login = $dados['login'];
      $senha = $dados['senha'];
      $sql="SELECT * FROM usuarios WHERE login = ? AND senha = ?";
      $query = $this->db->query($sql, array($login, $senha));
      return $query->result();
    }else{
      return 0;
    }
	}

}

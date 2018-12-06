<?php

class ClientesAvulsos_Model extends CI_Model {

    protected $id;
    protected $nome;
    protected $telefone;
    protected $cpf;
    protected $rg;
    protected $cep;
    protected $rua;
    protected $numero;
    protected $bairro;
    protected $cidade;
    protected $referencia;
    protected $complemento;
    protected $nascimento;

    public function create($dados) {
      $query = $this->db->insert('clientes_avulsos', $dados);
      if($query->result()!=null){
        return 1;
      }
     return 0;
    }

    public function update($dados) {
          $query = $this->db->update('clientes_avulsos', $dados, array('id' => $dados['id']));
          if($query->result()!=null){
            return 1;
          }
         return 0;
    }

    public function delete($id) {
        $query= $this->db->delete('clientes_avulsos', array('id' => $id['id']));
        if($query->result()!=null){
          return 1;
        }
       return 0;


    }


    public function get_all(){
        $a = $this->db->query("SELECT * FROM clientes_avulsos");
        return $a->result();
    }

    public function get_filter($filter) {
        $query = $this->db->query('SELECT * FROM clientes_avulsos WHERE id ='.$filter);
        return $query->result();
    }

    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function getLogin() {
        return $this->login;
    }

    function getRua() {
        return $this->rua;
    }

    function getNumero() {
        return $this->numero;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getComplemento() {
        return $this->complemento;
    }

    function getDepartamento() {
        return $this->departamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setRua($rua) {
        $this->rua = $rua;
    }

    function setNumero($numero) {
        $this->numero = $numero;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setComplemento($complemento) {
        $this->complemento = $complemento;
    }

    function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

}

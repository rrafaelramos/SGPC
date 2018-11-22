<?php

class Usuarios_Model extends CI_Model {

    protected $id;
    protected $nome;
    protected $email;
    protected $login;
    protected $rua;
    protected $numero;
    protected $bairro;
    protected $cidade;
    protected $referencia;
    protected $complemento;
    protected $departamento;

    public function create($usuario) {
        $query = $this->db->insert('usuarios', $usuario);
    }

    public function update($usuario) {
        $this->db->update('usuarios', $usuario, array('id' => $usuario['id']));
    }

    public function delete($id) {
        $this->db->update('usuarios', array('id' => $id));
    }

    public function get_all(){
        $this->db->get('usuarios');
    }

    public function get_filter($filter) {
        $this->db->where($filter);
        $this->db->get('usuarios');        
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

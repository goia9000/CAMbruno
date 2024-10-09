<?php

require_once 'DBConexao.php';

class usuarioModel{
    private $conx;
    private $tabela_nomes;

    public function __construct(){
        $this->conx = DBConexao::getConexao();
    }

    public function getAllUsuarios(){

    }
    public function getUsuarioById(){

    }
    public function createUsuario(){

    }
    public function updateUsuario(){

    }
    public function deleteUsuario(){
        
    }
}
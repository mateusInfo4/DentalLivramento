<?php

class Destaque {

    public $id_destaque;
    public $nome;
    public $id_categoria;

    function __construct($id_destaque, $nome, $id_categoria) {
        $this->id_destaque = $id_destaque;
        $this->nome = $nome;
        $this->id_categoria = $id_categoria;
    }

    function getId_destaque() {
        return $this->id_destaque;
    }

    function getNome() {
        return $this->nome;
    }

    function getId_categoria() {
        return $this->id_categoria;
    }

    function setId_destaque($id_destaque) {
        $this->id_destaque = $id_destaque;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setId_categoria($id_categoria) {
        $this->id_categoria = $id_categoria;
    }

}

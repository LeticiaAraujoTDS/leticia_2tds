<?php

class Pokemon {

    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;

    function __construct($nome, $tipo, $ataque, $defesa, $velocidade){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
    }
    function batalhar($a){
        
    }
}
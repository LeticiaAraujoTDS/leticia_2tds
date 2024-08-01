<?php

class Pokemon {

    public $nome;
    public $tipo;
    public $ataque;
    public $defesa;
    public $velocidade;
    public $nivel;
    public $pontosVida;
    public $experiencia;

    function __construct($nome, $tipo, $ataque, $defesa, $velocidade, $nivel, $pontosVida, $experiencia){
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->ataque = $ataque;
        $this->defesa = $defesa;
        $this->velocidade = $velocidade;
        $this->nivel = $nivel;
        $this->pontosVida = $pontosVida;
        $this->experiencia = $experiencia;
    }
    function batalhar(){
        echo "O Pokémon está em uma batalha.\n";
        $this->aumentarExperiencia(5);
    }
    function aumentarNivel() {
        $this->nivel = $this->nivel +1;
        $this->aumentarPontosVida();
        $this->experiencia = 0;
    }
    function aumentarPontosVida() {
        $this->pontosVida = $this->nivel * 10;
    }
    function aumentarExperiencia($exp) {
        $this->experiencia += $exp;
        if($this->experiencia >= 100)
            $this->aumentarNivel();
    }
    function __toString(){ 

        $texto = "\nNome = " . $this->nome;   
        $texto .= "\nTipo = " . $this->tipo;
        $texto .= "\nAtaque = " . $this->ataque;
        $texto .= "\nDefesa = " . $this->defesa;
        $texto .= "\nVelocidade = " . $this->velocidade;
        $texto .= "\nNível = " . $this->nivel;
        $texto .= "\nPontos de Vida = " . $this->pontosVida;
        $texto .= "\nExperiência = " . $this->experiencia . "\n"; 

        return $texto;
    }
}

$num = readline("Quantos pokémon deseja fazer? ");

for ($i=1; $i <= $num ; $i++) { 
    $nome = readline("Qual o nome do pokémon $i? \n");
    $tipo = readline("Qual o tipo do pokémon $i? \n");
    $ataque = readline("Qual o ataque do pokémon $i? \n");
    $defesa = readline("Qual a defesa do pokémon $i? \n");
    $velocidade = readline("Qual a velocidade do pokémon $i? \n");
    $nivel = readline("Qual o nível do pokémon $i? \n");
    $experiencia = readline("Qual a experiência do Pokémon? \n");
    $pontosVida = readline("Qual a quantidade de pontos de vida do Pokémon $i? \n");
    $pokemons = new Pokemon ($nome,$tipo, $ataque, $defesa, $velocidade, $nivel, $pontosVida, $experiencia);

    echo "\nAgora vamos descobrir se o Pokémon se saiu bem em batalha:\n";
    $pokemons-> batalhar();
    $pokemons-> aumentarNivel();
    $pokemons-> aumentarExperiencia($experiencia);
    echo $pokemons;
}

<?php

class Monitor {

    //Atributos
    public $cor;
    public $resolucao;
    public $marca;

    //Método
    function ligar () {
        echo "Computador ligado!!!\n";
    }
    function desligar () {
        echo "Computador desligado!!!\n";
    }
    function mostrarImagem () {
        echo "Computador mostrando imagem com a resolução $this->resolucao!!!\n";
    }
    
}

//Programa Principal
$monitor1 = new Monitor();
$monitor1 ->cor = "Preto";
$monitor1 ->resolucao = "1080x1920";
$monitor1 ->marca = "AOC";
$monitor1 ->ligar();
$monitor1 ->mostrarImagem();
$monitor1 ->desligar();

print "\n*****\n";

$monitor2 = new Monitor();
$monitor2 ->cor = "Prata";
$monitor2 ->resolucao = "1966x768";
$monitor2 ->marca = "Lenovo";
$monitor2 ->ligar();
$monitor2 ->mostrarImagem();
$monitor2 ->desligar();
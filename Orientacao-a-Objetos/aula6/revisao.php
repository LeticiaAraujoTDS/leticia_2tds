<?php

$retangulos = array();

function calculaArea(array $vetor){
    $area = $vetor["base"] * $vetor["altura"];
    return $area;
}

for ($i = 0; $i < 5; $i++) {
    $base = readline("Informe a base: ");
    $altura = readline("Informe a altura: ");
    //$ret = array("base" => $base, "altura" => $altura);
    $ret["base"] = $base;
    $ret["altura"] = $altura;
    array_push($retangulos, $ret);
}
print "\nAs áreas do retângulo são:\n";
foreach ($retangulos as $r) {
    //$area = $r["base"] * $r["altura"];
    $area = calculaArea($r);
    //echo "A área do retângulo é " . $area . ".\n";
    printf("O retângulo %dcm X %dcm tem área de %dcm².\n", $r["base"], $r["altura"], $area);
}

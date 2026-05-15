<?php

function somatorio(int $n){

    $somatorio = 0;

    for ($i = 0; $i <= $n; $i++) { 
        $somatorio += $i;
    }

    return $somatorio;
}

function somaDigitos(int $numero){

    $soma = 0;

    while ($numero > 0) {

        $digito = $numero % 10;
        $soma += $digito;
        $numero = (int)($numero / 10);

    }

    return $soma;
}

function safadometro(int $dia, int $mes, int $ano) {

    global $anjo;
    global $safadeza;

    $safadeza = somatorio($mes) + ((somaDigitos($ano) + (50 - $dia)) / 10);

    $anjo = 100 - $safadeza;

    return [$anjo, $safadeza];
}

$dia = $_REQUEST['campo_dia'];
$mes = $_REQUEST['campo_mes'];
$ano = $_REQUEST['campo_ano'];

safadometro($dia, $mes, $ano);

print "Anjo: $anjo <br>";
print "Safadeza: $safadeza <br>";

if ($safadeza > 50){

    print("Ihhhhh seu safado");

}
else{

    print("Voce é um presentinho de Deus, o abençoado. Parabens");

}

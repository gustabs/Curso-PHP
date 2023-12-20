<?php 

$Pessoas = [
    'Maria' => "12",
    'João' => "23",
    'Pedro' => "23",
    'Ana' => "31",
    'José' => "41",
    'Luiza' => "24",
    'Carlos' => "35",
    'Beatriz' => "23",
    'Fernanda' => "21",
];

    asort($Pessoas); // Deixa em ordem crecente os valores
    print_r($Pessoas);
    echo "<br>";
    echo "<br>";

    arsort($Pessoas); // Deixa em ordem decrecente os valores
    print_r($Pessoas);
    echo "<br>";
    echo "<br>";

    ksort($Pessoas); // deixa as chaves em ordem alfabetica
    print_r($Pessoas);
    echo "<br>";
    echo "<br>";

    krsort($Pessoas); // deixa as chaves em ordem alfabetica reversa
    print_r($Pessoas);
    echo "<br>";
    echo "<br>";
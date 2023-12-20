<?php

// Alterando o case das palavras

// ucfirst - Primeira letra da string em maiúscula;

// ucwords - primeira letra de cada palavra em maiuscula;

$str = "gustavo moisés silva inácio santos";

echo $str . "<br>";

$PrimeiraLetra = ucfirst($str);
echo $PrimeiraLetra . "<br>";

$PrimeirasLetras = ucwords($str);
echo $PrimeirasLetras . "<br>";
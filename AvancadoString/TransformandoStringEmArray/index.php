<?php

// Tranformando uma string em array

$str = "Cade o meu queijo?";

    $ArrayExplode = explode(" " , $str); //Separador, String

    print_r($ArrayExplode);
	
// Como vai ser impresso:

// Array ( [0] => Cade [1] => o [2] => meu [3] => queijo? )
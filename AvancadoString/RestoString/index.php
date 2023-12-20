<?php 

// Retornando o resto da string

// Com a função strstr() podemos encontrar um texto na string

// se algo for encontrado, a função vai retornar o resto da string após o texto encontrado

// Se não encontrar nada retorna false

    $Texto = "O Gustavo é muito legal!";

    $Localizador = strstr($Texto, "muito");

    echo $Localizador;
	
// como vai ser impresso:

// muito legal!
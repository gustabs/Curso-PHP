<?php 

// Encontrando a ultima ocorrencia

// Com a função strrpos() podemos a ultima ocorrencia de um texto na string

// Se recebermos algum valor é que foi encontrado, e este valor é de índice inicial

// Se for retornado false, o texto não está na string

    $Texto = "O Gustavo é muito legal! O";

    $Localizador = strrpos($Texto, "Gustavo"); // Apartir da posição foi encontrado "Gustavo".

    echo $Localizador;
	
// Como vai ser impresso:

// 26(Ele vai procurar a ultima com o resultado porem não procura de trás para frente)
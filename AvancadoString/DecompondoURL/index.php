<?php 

// Decompondo URL

// Com a função Parse_url podemos decompor uma url

// Vamos receber um array com todas as partes que o URL tem

// Alguns elementos que podem ser retornados são: Protocolo, Host, parametros

	$Url = "https://www.google.com";

	$ArrayUrl = parse_url($Url);

	print_r($ArrayUrl);

// Como vai ser impresso:

// Array ([scheme] => https [host] => www.google.com)  


?>
<!-- 
    Crie um Array com a função range de 10 a 45;
    Imprima todos os numeros com a soma de 6;
    Se passar de 30 a soma, imprima também que o limite é muito alto;
-->



<?php 

$arr = range(10, 45);

for($i = 0; $i < count($arr); $i++)
{
    $soma = $arr[$i] + 6;

    if($soma >= 30)
    {
        echo "O numero $soma é muito alto!<br>";
    }
    else
    {
        echo $soma . "<br>";
    }
}


?>
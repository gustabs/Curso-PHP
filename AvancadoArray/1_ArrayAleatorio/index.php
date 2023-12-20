<?php 

    $arr = range(1, 10);

    shuffle($arr); // Define que o numero será aleatório

    print_r($arr); // Sempre sera novos Numeros quando a pagina for recarregada
    echo "<br><br>";

    for($i = 0; $i < count($arr); $i++)
    {
        echo "$arr[$i] ";
    }
    
?>
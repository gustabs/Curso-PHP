<?php 

    $arr = [
        [1, 2, 3, 4],
        [1, 2, 3, 4],
        [1, 2, 3, 4]
    ];
    
    for($i = 0; $i < count($arr); $i++)
    {
        echo "Imprimindo array externo:" . ($i + 1) . "<br>"; //Variavel $i deixa de ser zero

        for($j = 0; $j < count($arr[$i]); $j++)
        {
            echo $arr[$i][$j] . "<br>"; 
        }
    }

?>
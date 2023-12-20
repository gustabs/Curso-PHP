<!-- Este tipo de arquivo descreve como é feito o acesso de um elemento de um array dentro de outro array -->

<?php

    $arr = [
        [1, 2, 3],
        [4, 5, 6]
    ];

    print_r($arr);
    echo "<br>";

    echo $arr[0][1] . "<br>"; // Array que deseja exibir([0]), Valor do array que será exibido([1])
    echo $arr[1][2] . "<br>"; // Array que deseja exibir([1]), Valor do array que será exibido([2])

    echo count($arr) . "<br>"; // Quantidade de itens que tem dentro do array = 2 [0] [1]
    echo count($arr[0]) . "<br>"; // Quantidade de itens que tem dentro do $arr[0] = 3 [0] [1] [2]

?>

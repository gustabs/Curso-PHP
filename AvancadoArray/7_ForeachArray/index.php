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

?>
    <table border = 1>
            <tr>
                <th>Nome</th>
                <th>Idade </th>
            </tr>

        <?php foreach ($Pessoas as $Nome => $Idade):?> 
            
            <tr>
                <td><?= $Nome?></td>
                <td><?= $Idade?></td>
            </tr>

        <?php endforeach; ?>
    </table>

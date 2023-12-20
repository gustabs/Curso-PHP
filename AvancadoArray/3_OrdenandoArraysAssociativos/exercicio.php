<?php 

    $Jogo = [
        'Ana' => '023',
        'Beatriz' => '121',
        'Camila' => '412',
        'Clara' => '081',
        'Eduarda' => '911',
        'Fernanda' => '313',
        'Gabriela' => '002',
        'Helena' => '511',
        'Isabella' => '048',
        'Julia' => '001',
        'Laura' => '205',
        'Letícia' => '039',
        'Luísa' => '028',
        'Maria' => '005',
        'Mariana' => '053',
        'Manuela' => '024',
        'Marina' => '008',
        'Milena' => '094',
        'Rafaela' => '004',
        'Sophia' => '049',
        'Abner' => '041',
        'Benjamim' => '012',
        'Carlos' => '017',
        'Davi' => '022',
        'Eduardo' => '100',
        'Felipe' => '032',
        'Gabriel' => '030',
        'Guilherme' => '038',
        'Heitor' => '077',
        'Henrique' => '040',
        'João' => '036',
        'José' => '060',
        'Lucas' => '055',
        'Miguel' => '079',
        'Pedro' => '067',
        'Rafael' => '078',
        'Rodrigo' => '066',
        'Samuel' => '054',
        'Thiago' => '086',
        'Vitor' => '096'
    ];
    
    asort($Jogo);
?>





    <table border = 1>
            <tr>
                <th>Nome</th>
                <th>Idade </th>
            </tr>

        <?php foreach ($Jogo as $Nome => $Idade):?> 
            
            <tr>
                <td><?= $Nome?></td>
                <td><?= $Idade?></td>
            </tr>

        <?php endforeach; ?>
    </table>
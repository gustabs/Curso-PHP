<?php 

    $Gabinete = "GABINETE GAMER TGT JESTER";
    $Processador = "PROCESSADOR AMD ATHLON 3000G";
    $PlacaMae = "PLACA MAE GIGABYTE B450M";
    $PlacaVideo = "PLACA DE VIDEO AFOX GEFORCE";
    $Fonte = "FONTE AEROCOOL VX-500";

    $PC = compact("Gabinete", "Processador", "PlacaMae", "PlacaVideo", "Fonte");

    foreach ($PC as $Pecas => $value) {
        echo "$Pecas: $value <br>";
    }

?>
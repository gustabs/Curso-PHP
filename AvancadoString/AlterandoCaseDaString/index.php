<?php

// Alterando case da string inteira

// strtolower - todas as letras minúsculas;

// strtoupper - todas as letras maiúsculas;

    $NomeCartão = "Gustavo Moisés Silva Inácio Santos";

    $NomeMaiusculo = strtolower($NomeCartão); // todas as letras minúsculas;

    $NomeMinusculo = strtoupper($NomeCartão); // todas as letras maiúsculas;

    echo $NomeCartão . "<br>";
    echo $NomeMinusculo . "<br>";
    echo $NomeMaiusculo . "<br>";
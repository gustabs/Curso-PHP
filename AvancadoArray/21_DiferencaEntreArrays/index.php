<?php

    $arr1 = [1, 2, 3];
    $arr2 = [2, 4, 6];

    $Diff = array_diff($arr1, $arr2);

    print_r($Diff);
    echo "<br>";

    $Diff2 = array_diff($arr2, $arr1);

    print_r($Diff2);
    echo "<br>";

    $arr3 = [4];

    $Diff3 = array_diff($arr2, $arr1, $arr3);

    print_r($Diff3);
    echo "<br>";

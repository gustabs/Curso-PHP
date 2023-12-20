<?php 

$a = range(0, 20);

function encontrarPares($a)
{
    for($i = 0; $i < count($a); $i++)
    {
        if($a[$i] % 2 == 0)
        {
            echo $a[$i] . "<br>";
        }
    }
}

encontrarPares($a);
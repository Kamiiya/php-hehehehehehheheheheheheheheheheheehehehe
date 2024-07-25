<?php

    $nota1= 74;
    $nota2= 87;
    $nota3= 54;

    $peso1= 2;
    $peso2= 3;
    $peso3= 5;

    $media_ponderada= (($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3)) / ($peso1 + $peso2 + $peso3);

    echo "A media final é " .$media_ponderada;

?>
<?php
    $paises=[
        "Brasil",
        "Angola",
        "Africa",
        "Alemanha",
        "Coreia",
        "China",
        "Russia",
        "Canaca",
        "Mexico",
        "Portugal"
    ];

    for($i=0; $i<count($paises); $i++){
        echo $i.'-'.$paises[$i];
        echo '<br/>';
    }

?>
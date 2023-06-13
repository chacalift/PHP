<?php
    $clientes = 'Roberson, Maria, Kleber, Rodrigo, Matheus, Philipe, Joao, Marcia, Priscila, Thiago';
    $frase = "Olá nome, seja bem vindo";
    $clientes_vetor = explode(',', $clientes);
    for($i=0; $i<count($clientes_vetor); $i++){
        $mudar = str_replace('nome', $clientes_vetor[$i], $frase);
        echo $mudar;
        echo '<br/>';
    }
    


?>
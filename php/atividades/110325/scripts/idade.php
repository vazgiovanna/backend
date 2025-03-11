<?php
    $idade = $_REQUEST['idade'];

    if($idade >=18){
        echo "Permissão aceita.";
    }else{
        echo "Permissão negada.";
    }
?>
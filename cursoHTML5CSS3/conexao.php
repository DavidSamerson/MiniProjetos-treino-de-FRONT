<?php

    $rostname = "localhost";
    $user = "root";
    $password = "";
    $database = "cadastro";
    $conexao = mysqli_connect($rostname,$user,$password,$database);

    if(!$conexao){
        print "FALHA NA CONNEXÃO COM O BD";
    }

?>
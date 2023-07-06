<?php 
    $hostname = "localhost";
    $bancodedados = "id20862533_servtec";
    $usuario = "id20862533_adminservtec";
    $senha = "Servtec@1234";
    //Cria a conexão com o banco
    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    //Checa se a conexao foi realizada com sucesso
    if($mysqli->connect_errno){
        echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
    } 
?>
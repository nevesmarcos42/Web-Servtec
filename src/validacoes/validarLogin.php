<?php
    //Inicia as sessões
    session_start();
    //Conexão com o banco de dados
    include_once("../db/conexao.php"); 
    //Recupera dados informados no Login
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //Valida os dados recuperados
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
    $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT );
    //Checa se não foram informados 
    if(!empty($email) && !empty($senha)){
        //Busca no banco de dados o usuario que corresponde com os dados digitados no formulario
        $query = "SELECT id, email, senha FROM usuarios WHERE email = '$email' LIMIT 1";
        $result_query = $mysqli->query( $query);
        $result = mysqli_fetch_assoc($result_query);
        //Verifica se foi encontrado dados na tabela usuários com os mesmos dados digitado no formulário
        if(isset($result)){
            //Armazenando os dados encontrados no banco de dados
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['senha'] = $result['senha'];
            //Verifica se a senha informada está correta
            if(password_verify($senha, $result['senha'])) {
                $_SESSION['loginErro'] = "Usuario";
                header("location: ../screens/paginas.php");
                exit; 
            //Senha incorreta e redireciona para a pagina login 
            } else {
                //Váriavel global recebendo a mensagem de erro
                $_SESSION['loginErro'] = "Inválido";
                header("location: ../../index.php");
                exit;
            }
        //Não foi encontrado dados na tabela usuário com os mesmos dados digitado no formulário
        //redireciona o usuario para a página de login
        } else {
            //Váriavel global recebendo a mensagem de erro
            $_SESSION['loginErro'] = "Inválido";
            header("location: ../../index.php");
            exit;
        }
        //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    } else {
        $_SESSION['loginErro'] = "Informe";
        header("location: ../../index.php");
        exit;
    }
?>
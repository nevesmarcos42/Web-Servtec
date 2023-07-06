<?php 
    //Inicia as sessões
    session_start();
    //Conexão com o banco de dados
    include_once("../db/conexao.php"); 
    //Recupera dados informados no cadastro
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmSenha = $_POST['confirmSenha'];
    //Valida os dados recuperados
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL );
    $senha = filter_input(INPUT_POST, 'senha', FILTER_VALIDATE_INT );
    $confirmSenha = filter_input(INPUT_POST, 'confirmSenha', FILTER_VALIDATE_INT );
    //Checa se p dados foram informados corretamente e se nao estao vazios 
    if(!empty($email) && !empty($senha) && $senha == $confirmSenha){
        //Codifica a senha
        $senha = password_hash($senha, PASSWORD_DEFAULT);
        //Insere os dados no banco de dados digitados no formulario
        $sql = "INSERT INTO usuarios ( email, senha ) VALUE ( '" .$email. "', '" .$senha. "')";
        if(mysqli_query($mysqli, $sql)) {
           //Váriavel global recebendo a mensagem de confirmação
           $_SESSION['loginErro'] = "Cadastrado";
           header("location: ../../index.php");
           exit;
        }
        //O campo usuário e senha não preenchido entra no else e redireciona o usuário para a página de login
    } else {
        //Váriavel global recebendo a mensagem de erro
        $_SESSION['loginErro'] = "Invalido";
        header("location: ../../index.php");
        exit;
    }
?>
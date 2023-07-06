<?php 
    session_start();
?>  

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login.css">
    <title>Servtec</title>
</head>
<body>
    <main>
        <div class="containerLogin">
            <div class="box">
                <form action="./src/validacoes/validarLogin.php" method="post">
                    <fieldset id="fieldSet">
                        <legend id="legend"><b>Conecte-se</b></legend>
                        <br><br><br>
                        <input type="text" name="msg" class="inputValue" value=<?php echo $_SESSION['loginErro'] ?> readonly>
                        <br><br><br>
                        <input type="email" name="email" class="inputValue" placeholder="servtec@gmail.com">
                        <br><br><br>
                        <div id="inputBox">
                            <input type="password" name="senha" class="inputValue" placeholder="****">
                        </div>
                        <br><br><br>
                        <input type="submit" value="Entrar" id="submit">
                        <br><br>
                        <div class="inputBox">
                            <a href="./src/screens/cadastro.php" class="labelLink" id="Cadastrar">Cadastre-se</a>
                        </div>
                        <br><br>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
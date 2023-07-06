<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/login.css">
    <title>Servtec</title>
</head>
<body>
    <main>
        <div class="containerLogin">
            <div class="box">
                <form action="../validacoes/validarCadastro.php" method="post">
                    <fieldset id="fieldSet">
                        <legend id="legend"><b>Cadastro de Usuário</b></legend>
                        <br>
                        <div class="inputBox" >
                            <input type="email" name="email" class="inputDate" placeholder="Email">
                        </div>
                        <br><br>
                        <div class="inputBox" >
                            <input type="password" name="senha" class="inputDate" placeholder="Senha" >
                        </div>
                        <br><br>
                        <div class="inputBox" >
                            <input type="password" name="confirmSenha" class="inputDate"  placeholder="Confirme a senha">
                        </div>
                        <br><br>
                        <input type="submit" value="Cadastrar" id="submit">
                        <br><br>
                    </fieldset>
                </form>
            </div>
        </div>
    </main>
</body>
</html>
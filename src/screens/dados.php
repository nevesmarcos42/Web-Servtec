<?php
session_start();
    include_once("../components/header.php");
    include_once("../db/conexao.php")
?>
<main>
    <div class="formRegistros">
        <form action="" method="get" >
            <fieldset id="fieldSet">
                <legend id="legend"><b>Registro Cadastrados</b></legend>
                <br>
                <?php
                    //Recupera dados informados no cadastro
                    $email = $_SESSION['email'];
                    // cria a instrução SQL que vai selecionar os dados
                    $sql = sprintf("SELECT * FROM registros WHERE fk_email_usuario = '$email'");
                    // executa a query
                    $result_query = $mysqli->query( $sql);
                    // transforma os dados em um array
                    $result = mysqli_fetch_assoc($result_query);
                    // calcula quantos dados retornaram
                    $total = mysqli_num_rows($result_query);
                    // se o número de resultados for maior que zero, mostra os dados
                    if($total > 0) {
                        // inicia o loop que vai mostrar todos os dados
                        do {
                ?>
                <div class="inputBox">
                    <p type="text" class="inputDate inputValue"><?php echo date('d/m/Y', strtotime($result['data'])).' - '.$result['moeda']
                    .' '.$result['valor'].' - R$ '.$result['valorConvertido'] ?></p>
                </div>
                <br><br>
                <?php
                        // finaliza o loop que vai mostrar os dados
                        }while($result = mysqli_fetch_assoc($result_query));
                    // fim do if
                    }
                ?>
            </fieldset>
        </form>
    </div>
</main>
<?php include_once("../components/footer.php") ?>>
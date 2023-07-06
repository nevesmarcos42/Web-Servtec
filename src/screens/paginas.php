<?php 
    session_start();
    //Inclui o componente Header
    include_once("../components/header.php");
    //Inclui a Conexão como banco de dados
    //include_once("../db/conexao.php");
    //Cria as variaveis e atribue valor a elas
    $cotacaoVenda = 0;
    $valorConvertido = 0;
    $valorInformado = 0;
    $hoje = date('d/m/Y'); //Captura a data atual
    //Consumindo dados da api awesome de cotação
    $dadosCotacao = file_get_contents("https://economia.awesomeapi.com.br/json/last/".$_SESSION["dadoCotacao"]);
    $dadosCotacao = json_decode($dadosCotacao, true);
    $dadosCotacao = $dadosCotacao[$_SESSION["dadoConversao"]];
    //Busca e armazena o valor de venda da moeda
    $valorVenda = $dadosCotacao['ask'];
    //Verifica se foi infomardo algum valor no formulario
    if(isset($_POST['valorInformado'])){
        $valorInformado = $_POST['valorInformado']; //Armazena o valor informado 
        $valorVenda = number_format($valorVenda, 2, '.', ''); //Formata em duas casas decimais
        $valorConvertido = $valorInformado * $valorVenda; //Calculo da conversão
        //Armazena dados na tabela registros no bando de dados
        /*$sql = "INSERT INTO registros ( moeda, valor, valorConvertido, fk_email_usuario ) VALUE ( 'BTC', '" 
        .$valorInformado. "', '" .$valorConvertido. "', '" .$_SESSION['email']. "')";
        
        if ($mysqli->query($sql) === TRUE) {
            echo " ";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }*/
    }
?>
<main>
    <div class="form">
        <form action="paginas.php" method="post" >
            <fieldset id="fieldSet">
                <legend id="legend"><b><?php echo"Conversor ".$_SESSION["moeda"] ?></b></legend>
                <br>
                <div class="inputBox">
                    <label for="data-cotacao" name="data-cotacao" id="data-cotacao" class="labelInput">Data Cotação</label>
                    <br>
                    <input type="number" name="data-cotacao" id="data-cortacao" class="inputDate" readonly placeholder=<?php echo $hoje ?>>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="number" name="valorInformado" id="valorInformado" class="inputDate inputValue" placeholder="Insira o valor" require>
                </div>
                <br><br>
                <input type="submit" value="Converter" name="submitBtc" id="submit">
                <br><br>
                <div class="inputBox">
                    <label for="valor-convertido" name="valor-convertido" id="valor-convertido" class="labelInput">Valor Convertido</label>
                    <br>
                    <input type="number" name="valor-convertido" class="inputDate" readonly placeholder=<?php echo $valorConvertido ?>>
                </div>
                <br>
            </fieldset>
        </form>
    </div>
</main>
<?php 
    //Inclui o componente footer
    include_once("../components/footer.php") 
?>
<?php 
    //Checa qual foi o botão precionado e carega a tela com os dados referente a ele
    if (isset($_POST['BTC'])) {
        $_SESSION["moeda"] = "Bitcoin";
        $_SESSION["dadoConversao"] = "BTCBRL";
        $_SESSION["dadoCotacao"] = "BTC-BRL";
        header("location: ../screens/paginas.php");
        exit;
    } else if (isset($_POST['USD'])) {
        $_SESSION["moeda"] = "Dolar";
        $_SESSION["dadoConversao"] = "USDBRL";
        $_SESSION["dadoCotacao"] = "USD-BRL";
        header("location: ../screens/paginas.php");
        exit;
    } else if (isset($_POST['EUR'])) {
        $_SESSION["moeda"] = "Euro";
        $_SESSION["dadoConversao"] = "EURBRL";
        $_SESSION["dadoCotacao"] = "EUR-BRL";
        header("location: ../screens/paginas.php");
        exit;
    } else if (isset($_POST['ARS'])) {
        $_SESSION["moeda"] = "Peso";
        $_SESSION["dadoConversao"] = "ARSBRL";
        $_SESSION["dadoCotacao"] = "ARS-BRL";
        header("location: ../screens/paginas.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/components.css">
    <title>Servtec</title>
</head>
<body>
    <header>
        <div id="primeira"></div>
        <div id="segunda"></div>
        <div id="terceira"></div>
        <div id="quarta"></div>
        <div id="quinta"></div>
        <div id="titulo">
            <h1>Servtec</h1>
        </div>
        <div id="logo">
            <img src="../../image/moedas.png">
        </div>
        <form action="navegação" method="post">
            <nav id="bt-header">
                <input class="btHeader" name="BTC" type="submit" value="BITCOIN">
                <input class="btHeader" name="USD" type="submit" value="DOLAR">
                <input class="btHeader" name="EUR" type="submit" value="EURO">
                <input class="btHeader" name="ARS" type="submit" value="PESO">
            </nav>
        </form>
        
    </header>
    
    
<?php 
    //Checa qual  foi o botão precionado e carega a tela
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['records'])) {
            header("location: ../screens/dados.php");
            exit;
        } else if (isset($_POST['logout'])) {
            header("location: ../logout.php");
            exit;
        } 
    }
?>
<footer>
        <form action="navegação" method="post">
            <nav id="bt-footer">
                <input class="btFooter" name="records" type="submit" value="Records">
                <input class="btFooter" name="logout" type="submit" value="Logout">
            </nav>
        </form>
    </footer>
</body>
</html>
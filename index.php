<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="./css/Immagini/Loghi/LogoMini.png">
    <title>Parrocchia di Badia San Savino</title>
    <script src ="./homeScript.js"></script>
    <script src="./js/indexScript.js"></script>
    <link rel="stylesheet" href="./css/indexStyle.css">
</head>
<body onload="check()">
    <div id="Container">
            <div id="dettagli">
                <h1 id="super-title">Parrocchia di Badia San Savino</h1>
                <p id="descrizione">Benvenuto nel sito della nostra parrochia!<br><br>
                    Per accedere puoi registrarti o effettuare il login se
                    frequenti o hai frequentato gruppi di questa parrocchia. <br>
                    Qualora tu fossi un visitatore, lascia bianchi i campi seguenti
                    e premi sul pulsante.
                </p>
            </div>
            <form name="login" action="./php/login.php" method="post">
            <div id="Form">
                <img id="Logo" src="./css/Immagini/Loghi/LogoBuono.png" alt="Logo">
                <p id="title">Accedi come Badiese</p>
                <div id="enter">
                    <input type="text" name="user" placeholder="Username" id="U">
                    <br><br>
                    <input type="password" name="pass" placeholder="Password" id="P">
                    <br>
                    <input type="image" src="./css/Immagini/Pulsanti/Go.png" name="azione" id="G" alt="Vai">
                </div>
            </div>
            <?php
            if (isset($_GET['errorMessage'])){
                echo "<script>\n";
                echo "window.alert('ATTENZIONE: le credenziali immesse non sono corrette!');\n";
                echo "</script>";
            }
            ?>
        </form>
        <div id="info">
            <a href="./php/registration.php" id="reg">Registrati</a>
        </div>
    </div>

</body>
</html>
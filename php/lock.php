<?php
session_start();
include "./gestioneDB/sessionUtil.php";

if (!isLogged()){
    header('Location: ./../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="FedericoGiacomelli">
        <link rel="stylesheet" href="./../css/lockStyle.css">
        <script src ="./../js/homeScript.js"></script>
        <title>Parrocchia di Badia San Savino</title>
    </head>
    <body onload="setInterval('checkDay()',100)">
    <div id="TitoloLock">
        <img id="Logo" src="./../css/Immagini/Loghi/LogoMini.png" alt="Logo">
        <h3 id="Parrocchia">Parrocchia di Badia San Savino</h3>
        <h3 id="Data"></h3>
    </div>
    <div id="blocco">
        <img src="./../css/Immagini/Icone/Lock.png" alt="imgLock">
    </div>
    <input id="back" type="image" src="./../css/Immagini/Pulsanti/Back.png" alt="imgBack" onclick="history.go(-1)">
    </body>
</html>
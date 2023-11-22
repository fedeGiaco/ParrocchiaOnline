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
        <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
        <meta charset="utf-8">
        <meta name="author" content="FedericoGiacomelli">
        <link rel="stylesheet" href="./../css/homeStyle.css">
        <link rel="stylesheet" href="./../css/navigationBar.css">
        <link rel="stylesheet" href="./../css/chiesaStyle.css">
        <script src ="./../js/homeScript.js"></script>
        <script src ="./../js/navigationBarScript.js"></script>
        <script src ="./../js/chiesaScript.js"></script>
        <title>Chiesa - Parrocchia di Badia San Savino</title>
    </head>
    <body onload="load()">
    <div id="container">
        <header>
            <img id="Logo" src="./../css/Immagini/Loghi/LogoMini.png" alt="Logo">
            <h3 id="Parrocchia">Parrocchia di Badia San Savino</h3>
            <h3 id="Data"></h3>
            <img class="imgX" src="./../css/Immagini/Sfondi/homeBack.JPG" alt="Sfondo">
        </header>
        <div id="movePage">
            <div class="menu" id="menuHome" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <img id="imgMenu1" src="./../css/Immagini/Icone/Home.png" alt="imgHome">
            </div>
            <div class="menu" id="menuInsert" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu2">Aggiungi contenuto</h3>
                <img id="imgMenu2" src="./../css/Immagini/Icone/Add.png" alt="imgAdd">
            </div>
            <div class="menu" id="menuEsplora"onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu3">Esplora</h3>
                <img id="imgMenu3" src="./../css/Immagini/Icone/Esplora.png" alt="imgEsplora">
            </div>
            <div class="menu" id="menuLetture" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu4">Letture</h3>
                <img id="imgMenu4" src="./../css/Immagini/Icone/Letture.png" alt="imgLetture">
            </div>
            <div class="menu" id="menuStanze" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu5">Stanze</h3>
                <img id="imgMenu5" src="./../css/Immagini/Icone/Stanze.png" alt="imgStanze">
            </div>
            <div class="menu67" id="menuInfo" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <img id="imgMenu6x" src="./../css/Immagini/Icone/Info.png" alt="imgInfo">
            </div>
            <div class="menu67" id="menu7" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)">
            <form action="./logout.php" method="post">
                <input id="imgMenu7x" type="image" src="./../css/Immagini/Icone/Logout.png" alt="imgOut" name="exit">
            </form>
            </div>
        </div>
        <div class="sezioneSelezionata">
            <h2 class="sezioneSelezionataElem" id="sezEsploraTitolo">Chiesa</h2>
            <img class="sezioneSelezionataElem" id="sezEsploraImg" src="./../css/Immagini/Icone/Chiesa.png" alt="imgChiesa">
        </div>
        <div id="preMain">
            <p>Esplora l'interno della chiesa panca per panca e non solo</p>
            </div>
            <input type="button" onclick="createChiesa()" id="buttonGo" value="Vai">
        <div id="chiesa">
            <div id="panche"></div>
            <img id="divPanca" class="pancaEffetiva" src="./../css/Immagini/Chiesa/Panche/Accesso.jpeg" hidden=true alt="imgPanca">
        </div>
        </div>
    </body>
</html>
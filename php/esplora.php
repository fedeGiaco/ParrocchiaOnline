<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
    <meta charset="utf-8">
    <meta name="author" content="FedericoGiacomelli">
    <link rel="stylesheet" href="./../css/homeStyle.css">
    <link rel="stylesheet" href="./../css/esploraStyle.css">
    <link rel="stylesheet" href="./../css/navigationBar.css">
    <script src ="./../js/homeScript.js"></script>
    <script src ="./../js/navigationBarScript.js"></script>
    <title>Esplora - Parrocchia di Badia San Savino</title>
</head>
<body onload="set()">
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
            <div class="menu" id="menuChiesa"onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu3">Chiesa</h3>
                <img id="imgMenu3" src="./../css/Immagini/Icone/Chiesa.png" alt="imgChiesa">
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
        <h2 class="sezioneSelezionataElem" id="sezEsploraTitolo">Esplora</h2>
        <img class="sezioneSelezionataElem" id="sezEsploraImg" src="./../css/Immagini/Icone/Esplora.png" alt="imgEsplora">
    </div>

    <div id="GiocoBadia">
        <div id="pre-gioco1">
            <h2 id="titleGame">Esplora l'area circostante la Badia</h2>
            <p>Utilizza la combinazione di tasti: W(su), A(sinistra), S(giù), D(destra) per muoverti all'interno della mappa</p>
        </div>
        <div id="pre-gioco2">
            <p>Scegli un intervallo di tempo (secondi) per cui vuoi che l'immagine rimanga sullo schermo</p>
            <input type="number" id="tImg" name="XTcor" value="5" min="1" max="15">
        </div>
        <div id="puntiInteresse">
            <img id="iB-Verde" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-StanzaNuova" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-Giochini" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-Scale" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-Chiesa" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-StanzaVecchia" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-CampinoStrada" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
            <img id="iB-CampinoFondo" src="./../css/Immagini/Pulsanti/Info.png" alt="imgGiocoInfo">
        </div>
        <div id="mydiv" style="position:relative; left:0px; top:120px;">
            <img id="puntatore" src="./../css/Immagini/Gioco/PuntatoreGiusto.png" alt="imgGiocoPunt">
        </div>
        <img id="mapBadia" src="./../css/Immagini/Gioco/Gioco.jpg" alt="imgMap">
        <script src ="./../js/esploraScript.js"></script>
    </div>
</div>
</body>
</html>
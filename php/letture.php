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
    <link rel="stylesheet" href="./../css/lettureStyle.css">
    <script src ="./../js/homeScript.js"></script>
    <script src ="./../js/navigationBarScript.js"></script>
    <script src ="./../js/letturaScript.js"></script>
    <title>Letture - Parrocchia di Badia San Savino</title>
</head>
<body onload="setInterval('checkDay()',100)">
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
        <div class="menu" id="menuChiesa" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
            <h3 id="titoloMenu4">Chiesa</h3>
            <img id="imgMenu4" src="./../css/Immagini/Icone/Chiesa.png" alt="imgChiesa">
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
        <h2 class="sezioneSelezionataElem" id="sezEsploraTitolo">Letture</h2>
        <img class="sezioneSelezionataElem" id="sezEsploraImg" src="./../css/Immagini/Icone/Letture.png" alt="imgLetture">
    </div>
        <?php
        require_once "./gestioneDB/DBmanager.php";
        global $CalendarioDB;

        $giornoOggi = date("d",time());
        $meseOggi = date("m",time());

        $cercaSanti = "SELECT Nome FROM Santo WHERE Giorno = '$giornoOggi' AND Mese = '$meseOggi'";
        $resultSanto = $CalendarioDB->performQuery($cercaSanti);
        while($row = $resultSanto->fetch_assoc()){
            $santo = $row['Nome'];
        }

        $cercaVangelo = "SELECT * FROM Vangelo WHERE Giorno = '$giornoOggi' AND Mese = '$meseOggi'";
        $resultVangelo = $CalendarioDB->performQuery($cercaVangelo);
        while($row = $resultVangelo->fetch_assoc()){
            $evangelistaVangelo = $row['Evangelista'];
            $capitoloVangelo = $row['Capitolo'];
            $versettoIVangelo = $row['VersettoInizio'];
            $versettoFVangelo = $row['VersettoFine'];
            $testoVangelo = $row['Testo'];
        }
        $cercaLettura = "SELECT * FROM Lettura WHERE Giorno = '$giornoOggi' AND Mese = '$meseOggi'";
        $resultLettura = $CalendarioDB->performQuery($cercaLettura);
        while($row = $resultLettura->fetch_assoc()){
            $profetaLettura = $row['Profeta'];
            $libroBibbia = $row['Libro'];
            $capitoloLettura = $row['Capitolo'];
            $versettoILettura = $row['VersettoInizio'];
            $versettoFLettura = $row['VersettoFine'];
            $testoLettura = $row['Testo'];
        }
        if ($libroBibbia == "unico"){
            $libroBibbia = '';
        }
        ?>
        <div id='oggi'>
            <p id='oggiSanto'>Il Santo di oggi è <b><?php echo $santo;?></b></p>
            <div id='entrambeLetture'>
				<div id="let">
					<div id="modLettura">
						<h3><?php echo "Dal $libroBibbia libro di $profetaLettura<br>Capitolo $capitoloLettura, $versettoILettura-$versettoFLettura";?></h3>
						<input class='modFont' type="submit" value="+" id="piuLettura" onclick="zoomIn(id)">
						<input class='modFont' type="submit" value="-" id="menoLettura" onclick="zoomOut(id)">
						<p id="dimFontLettura">Dimensione carattere: 18</p>
					</div>
					<div id='Lettura'>
						<p id="testoLettura"><?php echo $testoLettura; ?></p>
					</div>
				</div>
				<div id="van">
					<div id='modVangelo'>
						<h3><?php echo "Dal Vangelo di $evangelistaVangelo <br>Capitolo $capitoloVangelo, $versettoIVangelo-$versettoFVangelo";?></h3>
						<input class='modFont' type="submit" value="+" id="piuVangelo" onclick="zoomIn(id)">
						<input class='modFont' type="submit" value="-" id="menoVangelo" onclick="zoomOut(id)">
						<p id="dimFontVangelo">Dimensione carattere: 18</p>
					</div>    
					<div id='Vangelo'>                
						<p id='testoVangelo'><?php echo $testoVangelo; ?></p>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
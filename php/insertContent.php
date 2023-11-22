<?php
session_start();
include "./gestioneDB/sessionUtil.php";
include_once "./gestioneDB/DBmanager.php";
global $UserDb;

if($_SESSION['user']=='Ospite'){
    header('Location: ./lock.php');
    return;
}
$persona = $_SESSION['user'];
$findAdmin = "SELECT Note FROM Utente WHERE Username='$persona'";
$resultAdmin = $UserDb->performQuery($findAdmin);
while($row = $resultAdmin->fetch_assoc()){
    $admin = $row['Note'];
}
if($admin!="Admin"){
    header('Location: ./lock.php');
    return;
}


if (!isLogged()){
    header('Location: ./../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it" xmlns="http://www.w3.org/1999/html">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
    <meta charset="utf-8">
    <meta name="author" content="FedericoGiacomelli">
    <link rel="stylesheet" href="./../css/homeStyle.css">
    <link rel="stylesheet" href="./../css/insertContentStyle.css">
    <link rel="stylesheet" href="./../css/navigationBar.css">
    <script src ="./../js/homeScript.js"></script>
    <script src="./../js/insertContentScript.js"></script>
    <script src="./../js/navigationBarScript.js"></script>
    <title>Aggiungi contenuto - Parrocchia di Badia San Savino</title>
</head>
<body onload="setInterval('checkDay()',100)">
<div id="container">
    <header>
        <div id="Titolo">
            <img id="Logo" src="./../css/Immagini/Loghi/LogoMini.png" alt="imgLogo">
            <h3 id="Parrocchia">Parrocchia di Badia San Savino</h3>
            <h3 id="Data"></h3>
        </div>
        <img class="imgX" src="./../css/Immagini/Sfondi/homeBack.JPG" alt="imgBack">
    </header>
    <div id="movePage">
        <div class="menu" id="menuHome" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
             <img id="imgMenu1" src="./../css/Immagini/Icone/Home.png" alt="imgHome">
        </div>
       <div class="menu" id="menuEsplora" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
            <h3 id="titoloMenu2Add">Esplora</h3>
            <img id="imgMenu2Add" src="./../css/Immagini/Icone/Esplora.png" alt="imgEsplora">
        </div>
        <div class="menu" id="menuChiesa" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
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
            <img id="imgMenu6" src="./../css/Immagini/Icone/Info.png" alt="imgInfo">
        </div>
        <div class="menu67" id="menu7" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)">
        <form action="./logout.php" method="post">
            <input id="imgMenu7" type="image" src="./../css/Immagini/Icone/Logout.png" alt="imgOut" name="exit">
        </form>
        </div>
    </div>
    <div class="sezioneSelezionata">
        <h2 class="sezioneSelezionataElem" id="sezEsploraTitolo">Aggiungi contenuto</h2>
        <img class="sezioneSelezionataElem" id="sezEsploraImg" src="./../css/Immagini/Icone/Add.png" alt="imgAdd">
    </div>
    <div class="preMain">
        <h1 id="iTitolo">Inserisci contenuto</h1>
        <p id="iDescrizione">In questa sezione potrai aggiungere del contenuto (testo, foto, video, ...) e
        scegliere a chi renderlo disponibile a chi vuoi!</p>
    </div>
    <div id="mainContainer">
        <form name="upload" enctype="multipart/form-data" method="post">
        <div id="riquadro1">
            <div id="riquadro1-1">
                <h3 class="titleRiq">Inserisci un titolo</h3>
                <p class="descrizioneRiq">E' obbligatorio</p>
                <textarea rows="2" cols="40" id="title" name="title" placeholder="Apertura iscrizioni GREST!" required></textarea>
            </div>
            <div id="riquadro1-2">
                <h3 class="titleRiq">Inserisci del testo</h3>
                <p class="descrizioneRiq">E' facoltativo.<br>Se non vuoi inserire del testo, lascia bianca quest'area</p>
                <textarea rows="9" cols="40" id="text" name="text" placeholder="Es: Buongiorno a tutti, fra poco apriranno le iscrizioni per il GREST 2020. Su questo sito è possbile iscriversi seguendo il post che sarà appositamente pubblicato sulla homepage!"></textarea>
            </div>
        </div>
            <div class="cont" id="riquadro2">
                <h3 class="titleRiq">Inserisci fino a 10 file</h3>
                <p class="descrizioneRiq">E' facoltativo.<br>
                Quanti file vuoi inserire?
                    <select id="nFile" name="nFile">
                        <option value="0" onclick="ins('0')">Nessun file</option>
                        <option value="1" onclick="ins('1')">1 file</option>
                        <option value="2" onclick="ins('2')">2 file</option>
                        <option value="3" onclick="ins('3')">3 file</option>
                        <option value="4" onclick="ins('4')">4 file</option>
                        <option value="5" onclick="ins('5')">5 file</option>
                        <option value="6" onclick="ins('6')">6 file</option>
                        <option value="7" onclick="ins('7')">7 file</option>
                        <option value="8" onclick="ins('8')">8 file</option>
                        <option value="9" onclick="ins('9')">9 file</option>
                        <option value="10" onclick="ins('10')">10 file</option>
                    </select></p>
                <img id="imgImg" src="./../css/Immagini/Icone/img.png" alt="imgImg">
                <div id="areaInput"></div>
            </div>
            <div class="cont" id="riquadro3">
                <h3 class="titleRiq">Scegli a chi condividere</h3>
                <div id="Scelte">
                    <div id="preGroups">
                        <img id="imgGroup" src="./../css/Immagini/Icone/Gruppo.png" alt="imgGruppi">
                        <p class="poss" id="possibilita1"><input type="radio" id="all" name = "list[]" value="all" onclick="abilitaGruppi(id)" checked="checked">Tutti (ospiti compresi)</p>
                        <p class="poss" id="possibilita2"><input type="radio" id="allB" name = "list[]" value="allB" onclick="abilitaGruppi(id)">Badiesi</p>
                        <p class="poss" id="possibilita3"><input type="radio" id="group" name = "list[]" value="group" onclick="abilitaGruppi(id)">Gruppi specifici</p>
                    </div>
                        <div id="allGroups">
                        <hr>
                        <?php
                        require_once "./gestioneDB/DBmanager.php";
                        global $UserDb;
                        $persona = $_SESSION['user'];
                        $gruppi = array();
                        $trovaGruppi= "SELECT Gruppo FROM Svolge WHERE ID = '$persona' AND Anno = 2019";
                        $result = $UserDb->performQuery($trovaGruppi);
                        $i=0;
                        while($row = $result->fetch_assoc()){
                            $gruppi[$i] = $row['Gruppo'];
                            $i++;
                        }
                        $gruppiGrezzi = array();
                        for($i=0;$i < count($gruppi);$i++){
                            $gruppiGrezzi[$i] = $gruppi[$i];
                            aggiustaNomi($gruppi[$i]);
                            echo "<p><input type=\"radio\" id=\"$gruppi[$i]\" name = \"list[]\" value=\"$gruppi[$i]\">$gruppi[$i]</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
            <input id="postSend" type="submit" name="invia" value="Condividi">
        </form>

        <?php
        require_once "./gestioneDB/DBmanager.php";
        global $UserDb;
        $persona = $_SESSION['user'];
        // se è stato inviato il file...
        if(isset($_POST['invia']))
        {
            $fileDaInserire = filter_input(INPUT_POST,'nFile');
            $titoloImmesso = filter_input(INPUT_POST,'title');
            $testoImmesso = filter_input(INPUT_POST,'text');

            if ($testoImmesso == NULL)
                $testoImmesso = "Nessun testo";
            
            $UtenzaTemp = $_POST['list'];
            $Utenza = array();

            if (count($UtenzaTemp) == 1)
                $gruppiGrezzi[0] = $UtenzaTemp[0];
            if (count($UtenzaTemp) == 2)
                $gruppiGrezzi[0] = $UtenzaTemp[1];

            $queryPost = "
                INSERT INTO PostUtenti
					SET 
						Proprietario='$persona',
						Titolo='$titoloImmesso',
						Testo='$testoImmesso',
						Utenza='$gruppiGrezzi[0]',
						Immissione=CURRENT_TIMESTAMP;
                ";

            $resultPost = $UserDb->performQuery($queryPost);

            for($i = 1; $i <= $fileDaInserire; $i++){
                $nome_file_temporaneo = $_FILES['File'.$i]['tmp_name'];
                $nome_file_vero = $_FILES['File'.$i]['name'];
                $tipo_file = $_FILES['File'.$i]['type'];
        
                $dati_file = file_get_contents($nome_file_temporaneo);
        
                $dati_file = addslashes($dati_file);
                
                $queryFile = "INSERT INTO tabellaFile SET
                        Nome = '$nome_file_vero', 
                        Tipo = '$tipo_file', 
                        Dati = '$dati_file',
                        Proprietario = '$persona'
                        "; 

                $resultFile = $UserDb->performQuery($queryFile);
            }
            if($titoloImmesso != NULL){
                echo "<script>\n";
                echo "window.alert('Hai correttamente condiviso il post!');\n";
                echo "location.href='./home.php'";
                echo "</script>";
                return;
            }
        }
        ?>
    </div>
</div>
</body>
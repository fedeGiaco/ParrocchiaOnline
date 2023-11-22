<?php
session_start();
include "./../gestioneDB/sessionUtil.php";

if (!isLogged() || $_SESSION['user']=="Ospite"){
    header('Location: ./../../index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
        <meta charset="utf-8">
        <meta name="author" content="FedericoGiacomelli">
        <link rel="stylesheet" href="./../../css/gruppiStyle.css">
        <link rel="stylesheet" href="./../../css/navigationBarGruppi.css">
        <script src ="./../../js/navigationBarGruppiScript.js"></script>
        <title>Parrocchia di Badia San Savino</title>
    </head>
    <body onload="setInterval('checkDay()',100)">
    <div id="container">
        <header>
        <img class="imgXg" src="./../../css/Immagini/Gruppi/gMedie.jpeg" alt="Sfondo">

            <h3 id="Gruppo">Gruppo Medie</h3>
        </header>
        <div id="movePage">
            <div class="menu" id="menu1" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu1">Torna alla home</h3>
                <img id="imgMenu1" src="./../../css/Immagini/Icone/Home.png" alt="imgHome">
            </div>
            <div class="menu" id="menu2" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu2">Aggiungi contenuto</h3>
                <img id="imgMenu2" src="./../../css/Immagini/Icone/add.png" alt="imgAdd">
            </div>
            <div class="menu" id="menu3" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu3">Info</h3>
                <img id="imgMenu3" src="./../../css/Immagini/Icone/info.png" alt="imgInfo">
            </div>
            <div class="menu" id="menu4" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)">
                <form action="./../logout.php" method="post">
                    <h3 id="titoloMenu4">Esci</h3>
                    <input type="image" id="imgMenu4" src="./../../css/Immagini/Icone/Logout.png" alt="imgOut" name="exit">
                </form>
            </div>
        </div>       
        <div id="mainTitolo">
            <div id="mainTitolo1">
                <img class="imgAlert" id="Es1mainTitolo" src="./../../css/Immagini/Icone/PuntoEs.png" alt="imgAlert">
                <h1 id="titolomainTitolo">Ultimi post</h1>
                <img class="imgAlert" id="Es2mainTitolo" src="./../../css/Immagini/Icone/PuntoEs.png" alt="imgAlert">
            </div>
            <div id="mainTitolo2">
                <form method="post">
                    <p class="pUpdate">Mostra post di 
                        <?php
                        require_once "./../gestioneDB/DBmanager.php";
                        global $UserDb;
                        $persona = $_SESSION['user'];
                        $ut = 'GruppoMedie';
                        $controlloPersona = "all";
                        $giorniMax = 60;
                        $persone = array();
                        $personePost = "SELECT DISTINCT Proprietario FROM PostUtenti WHERE Utenza = '$ut'";
                        $resultPersonePost = $UserDb->performQuery($personePost);
                        $i=0;
                        while($row = $resultPersonePost->fetch_assoc()){
                            $persone[$i] = $row['Proprietario'];
                            $i++;
                        }
                        echo "<select id='personePost' name='personePost'>";
                        echo "<option value='all'>Tutti</option>";
                            for($i=0;$i<count($persone);$i++){
                                echo "<option value='$persone[$i]'>$persone[$i]</option>";
                            }
                        echo "</select>";
                        ?>
                    </p>
                    <p class="pUpdate"> e pubblicati negli ultimi <input type="number" id="updatePostDate" name="updatePostDate" value="60" min="1" max="10000"> giorni</p>
                    <input type="submit" name="updatePost" id="updatePost" value="Vai">
                </form>
                <?php
                if(isset($_POST['personePost'])){
                    $interessato = filter_input(INPUT_POST,'personePost');
                    if($interessato == 'all')
                            $interessato = "tutti";
                        $range = filter_input(INPUT_POST,'updatePostDate');
                        echo "<p id='cosaVedi'><i>Stai visualizzando post di <b>$interessato</b> degli ultimi <b>$range</b> giorni</i></p>";
                    }
                    else
                        echo "<p id='cosaVedi'><i>Stai visualizzando post di <b>tutti</b> degli ultimi <b>60</b> giorni</i></p>";
                    ?>
            </div>
        </div> 

        <main id="main">
            <?php
            require_once "./../gestioneDB/DBmanager.php";
            require_once "./../post.php";
            global $UserDb;
            $ut = 'Gruppo Medie';
            if(isset($_POST['personePost'])){
                $interessato = filter_input(INPUT_POST,'personePost');
                $range = filter_input(INPUT_POST,'updatePostDate');
                ricercaPerPersonaEData($interessato,$ut,$range,$giorniMax,$controlloPersona,$ciSonoPost,$ultimoId,$primoId);
            }
            else{
                $giorniMax = 60;
                $range = 60;
                $interessato = "all";
                $controlloPersona = "all";
                ricercaPerPersonaEData($interessato,$ut,$range,$giorniMax,$controlloPersona,$ciSonoPost,$ultimoId,$primoId);
            }
            recuperaPost($ciSonoPost,$ultimoId,$primoId,$controlloPersona,$persona,$giorniMax,$ut);
            ?>
        </main>
    </div>
    </body>
</html>
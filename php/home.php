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
        <script src ="./../js/homeScript.js"></script>
        <script src ="./../js/navigationBarScript.js"></script>
        <script src ="./../js/search.js"></script>
        <title>Parrocchia di Badia San Savino</title>
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
            <div class="menuX" id="menu1x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <div id="hormenu">
                <ul>
                <li>
                <h3 id="titoloMenu1x">Area riservata</h3><img id="imgMenu1x" src="./../css/Immagini/Icone/Lock.png" alt="imgAdd">
                <?php
                $persona = $_SESSION['user'];
                if($persona!="Ospite"){
                    echo "<ul>";
                    echo "<li><img id='imgMenuBadia1' src='./../css/Immagini/Icone/Add.png' alt='imgAdd'><h3 id='titoloMenuBadia1'>Aggiungi contenuto</h3></li>";
                    echo "<li><img id='imgMenuBadia2' src='./../css/Immagini/Icone/Canti.png' alt='imgAdd'><h3 id='titoloMenuBadia2'>Libretto dei canti</h3></li>";
                    echo "<li><img id='imgMenuBadia3' src='./../css/Immagini/Icone/Materiali.png' alt='imgAdd'><h3 id='titoloMenuBadia3'>Materiali</h3></li>";//<!--Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a>-->
                    echo "<li><img id='imgMenuBadia4' src='./../css/Immagini/Icone/img.png' alt='imgAdd'><h3 id='titoloMenuBadia4'>Album fotografici</h3></li>";
                    echo "<li id='user' onclick='go(id)'><img id='imgMenuBadia5' src='./../css/Immagini/Icone/gruppo.png' alt='imgAdd'><h3 id='titoloMenuBadia5'>Gestione utenti</h3></li>";
                    echo "</ul>";
                }
                ?>
                </li> 
                </ul>
                </div>
            </div>
            <div class="menuX" id="menu2x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu2x">Esplora</h3>
                <img id="imgMenu2x" src="./../css/Immagini/Icone/Esplora.png" alt="imgEsplora">
            </div>
            <div class="menuX" id="menu3x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu3x">Chiesa</h3>
                <img id="imgMenu3x" src="./../css/Immagini/Icone/Chiesa.png" alt="imgChiesa">
            </div>
            <div class="menuX" id="menu4x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu4x">Letture</h3>
                <img id="imgMenu4x" src="./../css/Immagini/Icone/Letture.png" alt="imgLetture">
            </div>
            <div class="menuX" id="menu5x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <h3 id="titoloMenu5x">Stanze</h3>
                <img id="imgMenu5x" src="./../css/Immagini/Icone/Stanze.png" alt="imgLetture">
            </div>
            <div class="menu6x" id="menu6x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
                <img id="imgMenu6x" src="./../css/Immagini/Icone/Info.png" alt="imgInfo">
            </div>
            <div class="menu6x" id="menu7x" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)">
            <form action="./logout.php" method="post">
                <input id="imgMenu7x" type="image" src="./../css/Immagini/Icone/Logout.png" name="exit" alt="imgOut">
            </form>
            </div>
        </div>
            <?php
            require_once "./gestioneDB/DBmanager.php";
            global $UserDb;
            if($_SESSION['user']!='Ospite'){
                $gruppi = array();
                $ruoli = array();
                $anni = array();
                $persona = $_SESSION['user'];
                $trovaGruppi = "SELECT Gruppo,Ruolo,Anno FROM Svolge WHERE ID = '$persona' GROUP BY Gruppo,Ruolo,Anno ORDER BY Anno DESC";
                $result = $UserDb->performQuery($trovaGruppi);
                $i=0;
                while($row = $result->fetch_assoc()){
                    $gruppi[$i] = $row['Gruppo'];
                    if($row['Ruolo']=="Inesistente")
                        $ruoli[$i] = "Membro";
                    else
                        $ruoli[$i] = $row['Ruolo'];
                    $anni[$i] = $row['Anno'];
                    $i++;
                }
                echo "<aside>";
                echo "<p id='xgruppi'>";
                echo "<img id='attivita' src='./../css/Immagini/Icone/Attività.png' alt='imgAttivita'>";
                echo "<h3 id='miniTitolo'>Attività di $persona: </h3>";

                for($i=0;$i < count($gruppi);$i++){
                    $gruppiGrezzi = $gruppi;
                    aggiustaNomi($gruppi[$i]);
                    switch ($gruppi[$i]){
                    /*
                    Per ragioni pratiche ho creato esclusivamente le pagine dei gruppi 
                    cui appartengo (così da poterci simulare post,disporre di immagini,...). 
                    In questa sezione ci saranno tutti i 'case' con i gruppi di quest'anno
					seguiti dai gruppi vecchi e quindi senza pagina collegata.
                    */
                    case 'Gruppo Giovani':
                        echo "<a id='$gruppiGrezzi[$i]' class='linkGruppo' href=\"./Gruppi/gruppoGiovani.php\" onmouseover='evidenzia(id,1)' onmouseleave='evidenzia(id,0)'>Gruppo Giovani - <i>$ruoli[$i]</i></a>";
                        break;
                    case 'Gruppo Medie':
                        echo "<a id='$gruppiGrezzi[$i]' class='linkGruppo' href=\"./Gruppi/gruppoMedie.php\" onmouseover='evidenzia(id,1)' onmouseleave='evidenzia(id,0)'>Gruppo Medie - <i>$ruoli[$i]</i></a>";
                        break;
						
					default:
						echo "<p class='gruppiDatati'>$gruppi[$i] ($anni[$i]) - <i>$ruoli[$i]</i></p>";
                    }
                }
            echo "</p>";
            echo "</aside>";
            }
            ?>
            <div id="mainTitolo">
                <div id="mainTitolo1">
                    <img id="Es1mainTitolo" src="./../css/Immagini/Icone/PuntoEs.png" alt="imgAlert">
                    <h1 id="titolomainTitolo">Ultimi post</h1>
                    <img id="Es2mainTitolo" src="./../css/Immagini/Icone/PuntoEs.png" alt="imgAlert">
                </div>
                <div id="mainTitolo2">
                    <form method="post">
                    <p class="pUpdate">Mostra post di 
                        <?php
                            $persona = $_SESSION['user'];
                            if($persona=="Ospite"){
                                $ut = 'all';
                                $personePost = "SELECT DISTINCT Proprietario FROM PostUtenti WHERE Utenza='$ut'";
                            }
                            else{
                                $ut = 'allB';
                                $personePost = "SELECT DISTINCT Proprietario FROM PostUtenti WHERE (Utenza='all' OR Utenza='allB')";
                            }
                            $controlloPersona = "all";
                            $giorniMax = 60;
                            $persone = array();
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
                        ?> e 
                    <p class="pUpdate">degli ultimi <input type="number" id="updatePostDate" name="updatePostDate" value="60" min="1" max="10000"> giorni </p>
                    <input type="submit" name="updatePost" id="updatePost" value="Vai"></p>
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
                <div id="mainTitolo3">
                    <p class="pUpdate">Ricerca per una parte del post</p><br>
                    <input type="text" id="search" autocomplete="off" placeholder="Inserisci una parte di titolo/testo del post" onkeyup="showResult(this.value)"/>
                </div>
            </div>
            <div id="stop" hidden>
                <p id="stopTitolo">Interrompi la ricerca</p>
                <input type="image" id="stopImg" src="./../css/Immagini/Pulsanti/X.png" alt="imgAlert" onclick="showResult('')">
            </div>
            <div id="risultatiRicerca" hidden></div>
            <main id="main">
            <?php
            require_once "./gestioneDB/DBmanager.php";
            require_once "./post.php";
            global $UserDb;
            $ut = 'all';
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
    <footer>
        <div id="imgFooter">
            <img id="logoMini" src="./../css/Immagini/Loghi/LogoMini.png" alt="imgLogo">
        </div>
        <div id="infoFooter">
            <h1>Parrocchia di Badia San Savino</h1>
            <h3 id="elem1Footer">Via Vecchia Fiorentina 256<br> Cascina (PI)</h3>
            <a href="mailto:parrocchiadibadiasansavino@email.it">parrocchiadibadiasansavino@email.it</a><br>
            <p class="messeFooter"><b>Orario messe (feriale):</b> 17:00 (inverno), 18:00 (estate)<br>
                                   <b>Orario messe (festivo):</b> 8:00 (chiesino), 9:00, 11:00</p>
        </div>
        <div id="mapFooter">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.7614670569715!2d10.4586392513558!3d43.69472217901737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12d58be6782e151f%3A0xfc7601333f5bb065!2sAntica%20badia%20di%20San%20Savino!5e0!3m2!1sit!2sit!4v1578863059449!5m2!1sit!2sit" width="350" height="200" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </footer>
    </div>
    </body>
</html>
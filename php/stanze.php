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
    <link rel="stylesheet" href="./../css/stanzeStyle.css">
    <link rel="stylesheet" href="./../css/navigationBar.css">
    <script src ="./../js/homeScript.js"></script>
    <script src ="./../js/stanzeScript.js"></script>
    <script src ="./../js/navigationBarScript.js"></script>
    <title>Stanze - Parrocchia di Badia San Savino</title>
</head>
<body onload="checkDay()">
<div id="container">
    <header>
        <div id="Titolo">
            <img id="Logo" src="./../css/Immagini/Loghi/LogoMini.png" alt="Logo">
            <h3 id="Parrocchia">Parrocchia di Badia San Savino</h3>
            <h3 id="Data"></h3>
        </div>
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
        <div class="menu" id="menuEsplora" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
            <h3 id="titoloMenu3">Esplora</h3>
            <img id="imgMenu3" src="./../css/Immagini/Icone/Esplora.png" alt="imgEsplora">
        </div>
        <div class="menu" id="menuChiesa" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
            <h3 id="titoloMenu4">Chiesa</h3>
            <img id="imgMenu4" src="./../css/Immagini/Icone/Chiesa.png" alt="imgChiesa">
        </div>
        <div class="menu" id="menuLetture" onmouseenter="selezioneSi(id)" onmouseleave="selezioneNo(id)" onclick="go(id)">
            <h3 id="titoloMenu5">Letture</h3>
            <img id="imgMenu5" src="./../css/Immagini/Icone/Letture.png" alt="imgLetture">
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
        <h2 class="sezioneSelezionataElem" id="sezEsploraTitolo">Stanze</h2>
        <img class="sezioneSelezionataElem" id="sezEsploraImg" src="./../css/Immagini/Icone/Stanze.png" alt="imgStanze">
    </div>

    <h2 id="prefazione_titolo">Stanze parrocchiali</h2>
    <p id="prefazione_descrizione">La Parrocchia ha a disposizione 3 stanze parrocchiali. <br>Di seguito ne è riportata la descrizione con possibilità di prenotazione</p></colgroup>

    <table>
        <tr>
            <td class="tdSmall">Stanza</td>
            <td class="tdLarge">Gruppi interessati</td>
            <td class="tdMedium">Fascia oraria</td>
            <td class="tdSmall">Dimensione</td>
            <td class="tdMedium">Utilizzi</td>
            <td class="tdMedium">Materiale a disposizione</td>
        </tr>
        <tr>
            <td>Stanza vecchia<img id="stanzaVecchia" src="./../css/Immagini/Gioco/Luoghi/StanzaVecchia.jpeg" alt="imgStanzaVecchia"></td>
            <td class="tdRight">
                - Gruppo giovanissimi<br>
                - Gruppo medie<br>
                - Catechismo di 2 elementare<br>
                - Oratorio<br>
                - Gruppo presepe vivente
            </td>
            <td>
                20:00 - 21:00 (mer)<br>
                18:30 - 19:45 (lun)<br>
                14:30 - 15:30 (sab)<br>
				15:30 - 17:00 (sab)<br>
                21:15 - 22:45 (lun)<br>
            </td>
            <td>
                Lunghezza: 8m<br>
                Larghezza: 6m</td>
            <td>
                Spazio ideale per gruppi abbastanza numerosi: si presta bene fino a 30 a sedere e 40 in piedi
            </td>
            <td>
                10 panche richiudibili<br>
                6 tavoli richiudibili<br>
                20 sedie pieghievoli
            </td>
        </tr>
            <tr>
                <td>Stanza vecchia (sopra)</td>
                <td class="tdRight">
                    - Catechismo di 3 elementare<br>
                    - Riunioni oratorio<br>
                    - Riunioni gruppo medie
                </td>
                <td>
                    14:30 - 15:30 (sab)
                    21:15 - 22:45 (mer)
                    21:15 - 22:45 (mer)
                </td>
                <td>
                    Lunghezza: 6m<br>
                    Larghezza: 3,5m
                </td>
                <td>
                    Spazio ideale per piccoli gruppi: pratico fino a 15 persone a sedere e 20 in piedi
                </td>
                <td>
                    2 panche richiudibili<br>
                    2 tavoli richiudibli<br>
                    5 sedie pieghevoli
                </td>
            </tr>
            <tr>
                <td>Stanza nuova<img id="stanzaNuova" src="./../css/Immagini/Gioco/Luoghi/StanzaNuova.JPG" alt="imgStanzaNuova"></td>
                <td class="tdRight">
                    - Catechismo di 4 elementare<br>
                    - Catechismo di 5 elementare
                </td>
                <td>
                    14:30 - 15:30 (sab)
                    14:30 - 15:30 (sab)
                </td>
                <td>
                    Lunghezza: 10m<br>
                    Larghezza: 8m
                </td>
                <td>
                    Spazio ideale per pranzi e cene fino a 50 persone a sedere e 75 in piedi
                </td>
                <td>
                    10 panche richiudibili<br>
                    10 tavoli richiudibli<br>
                    Servizi igienici<br>
                    Cucina
                </td>
    </table>
    <div id="gap">
        <div id="gestioneCalendario">
            <form method="post">
                <h2 id="titleCal">Vista settimanale (si considerano esclusivamente le ore)</h2>
                <input class="cal" type="submit" name="prev2Settimana" id="prev2Settimana" value="2 settimane fa"> 
                <input class="cal" type="submit" name="prevSettimana" id="prevSettimana" value="Settimana scorsa"> 
                <input class="cal" type="submit" name="oggiSettimana" id="oggiSettimana" value="Settimana corrente"> 
                <input class="cal" type="submit" name="nextSettimana" id="nextSettimana" value="Prossima settimana">
                <input class="cal" type="submit" name="next2Settimana" id="next2Settimana" value="Fra 2 settimane">
                <input class="cal" type="submit" name="next3Settimana" id="next3Settimana" value="Fra 3 settimane">
                <input class="cal" type="submit" name="next4Settimana" id="next4Settimana" value="Fra 4 settimane">
            </form>
        </div>
        <table>
            <?php
            include_once "./GestioneDB/DBmanager.php";
            global $UserDB;
            
            $giorni = array("Domenica","Lunedi","Martedì","Mercoledì","Giovedì","Venerdì","Sabato");
            $ore = array(12=>12,13=>13,14=>14,15=>15,16=>16,17=>17,18=>18,19=>19,20=>20,21=>21,22=>22,23=>23);

            $settimanaInCorso = array();
            $meseInCorso = array();
            $annoInCorso = array();

            $giornoCorrente = date("d",time());
            $giornoSettimana = date("w",time());
            $meseSettimana = date("m",time());
            $annoSettimana = date("y",time());
			function newDatePast(&$giornoCorrente,&$meseCorrente,&$annoCorrente,$i){
				if ($giornoCorrente - $i<1){
					$meseCorrente--;
					if($meseCorrente==0){
						$meseCorrente=12;
						$annoCorrente--;
					}
				}
				$giorniMese = 28;
				switch($meseCorrente){
				case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
				case 12:
					if($giornoCorrente - $i<1)
						$giornoCorrente = 31+($giornoCorrente-$i);
					else
						$giornoCorrente = $giornoCorrente-$i;
					break;
				case 4:
                case 6:
                case 9:
                case 11:
					if($giornoCorrente - $i<1)
						$giornoCorrente = 30+($giornoCorrente-$i);
					else
						$giornoCorrente = $giornoCorrente-$i;
					break;		
				case 2:
					if($annoCorrente%4==0)
						$giorniMese = 29;
					else
						$giorniMese = 28;
					if($giornoCorrente - $i<1)
						$giornoCorrente = $giorniMese+($giornoCorrente-$i);
					else
						$giornoCorrente = $giornoCorrente-$i;
					break;	
				}
			}
            function newDate(&$giornoCorrente,&$meseCorrente,&$annoCorrente,$i){
                switch($meseCorrente){
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                        if($giornoCorrente+$i > 31){
                            $giornoCorrente = $giornoCorrente+$i-31;
                            $meseCorrente++;
                        }
                        else{
                            $giornoCorrente+=$i;
                        }
                    break;

                    case 12:
                        if($giornoCorrente+$i > 31){
                            $giornoCorrente = $giornoCorrente+$i-31;
                            $meseCorrente = 1;
                            $annoCorrente++;
                        }
                        else{
                            $giornoCorrente+=$i;
                        }
                    break;

                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        if($giornoCorrente+$i > 30){
                            $giornoCorrente = $giornoCorrente+$i-30;
                            $meseCorrente++;
                        }
                        else{
                            $giornoCorrente+=$i;
                        } 
                    break;

                    case 2:
                        if($annoCorrente%4==0){
                            if($giornoCorrente+$i > 29){
                                $giornoCorrente = $giornoCorrente+$i-29;
                                $meseCorrente++;
                            }
                            else{
                                $giornoCorrente+=$i;
                            }
                        }
						else{
							if($giornoCorrente+$i > 28){
                                $giornoCorrente = $giornoCorrente+$i-28;
                                $meseCorrente++;
                            }
                            else{
                                $giornoCorrente+=$i;
                            }
						}
                    break;
                } 
            }
            if(isset($_POST['prev2Settimana'])){
                newDatePast($giornoCorrente,$meseSettimana,$annoSettimana,14);
                echo "<h2 id='settimanaScelta'>2 settimane fa</h2>";
            }
            if(isset($_POST['prevSettimana'])){
                newDatePast($giornoCorrente,$meseSettimana,$annoSettimana,7);
                echo "<h2 id='settimanaScelta'>Settimana scorsa</h2>";
            }
            if(isset($_POST['oggiSettimana'])){
                $giornoCorrente = date("d",time());
                echo "<h2 id='settimanaScelta'>Settimana corrente</h2>";
            }
            if(isset($_POST['nextSettimana'])){
                newDate($giornoCorrente,$meseSettimana,$annoSettimana,7);
                echo "<h2 id='settimanaScelta'>Prossima settimana</h2>";
            }
            if(isset($_POST['next2Settimana'])){
                newDate($giornoCorrente,$meseSettimana,$annoSettimana,14);
                echo "<h2 id='settimanaScelta'>Fra 2 settimane</h2>";
            }
            if(isset($_POST['next3Settimana'])){
                newDate($giornoCorrente,$meseSettimana,$annoSettimana,21);
                echo "<h2 id='settimanaScelta'>Fra 3 settimane</h2>";
            }
            if(isset($_POST['next4Settimana'])){
                newDate($giornoCorrente,$meseSettimana,$annoSettimana,28);
                echo "<h2 id='settimanaScelta'>Fra 4 settimane</h2>";
            }

            $k=1;
            $annoNuovo = $annoSettimana;

            for($i=0;$i<7;$i++){
                $annoInCorso[$i] = $annoSettimana;
            }

            function calcNuovoGiornoMeseAnno(&$giorno,&$mese,&$anno,$i,&$k,$annoSettimana,&$meseSettimana,$giornoCorrente){
                switch($meseSettimana){
                    case 1:
                    case 3:
                    case 5:
                    case 7:
                    case 8:
                    case 10:
                        if($giornoCorrente+$i > 31){
                            $giorno = 0+$k;
                            $mese = $meseSettimana+1;
                            $k++;
                        }
                        else{
                            $giorno = $giornoCorrente+$i;
                            $mese = $meseSettimana;
                        }
                    break;

                    case 12:
                        if($giornoCorrente+$i > 31){
                            $giorno = 0+$k;
                            $mese = 1;
                            $anno = $annoSettimana+1;
                            $k++;
                        }
                        else{
                            $giorno = $giornoCorrente+$i;
                            $mese = $meseSettimana;
                            $anno = $annoSettimana;
                        }
                    break;

                    case 4:
                    case 6:
                    case 9:
                    case 11:
                        if($giornoCorrente+$i > 30){
                            $giorno = 0+$k;
                            $mese = $meseSettimana+1;
                            $k++;
                        }
                        else{
                            $giorno = $giornoCorrente+$i;
                            $mese = $meseSettimana;
                        } 
                    break;
					
                    case 2:
                        if($annoSettimana%4==0){
                            if($giornoCorrente+$i > 29){
                                $giorno = 0+$k;
                                $mese = $meseSettimana+1;
                                $k++;
                            }
                            else{
                                $giorno = $giornoCorrente+$i;
                                $mese = $meseSettimana;
                            }
                        }
                        else{
							if($giornoCorrente+$i > 28){
                                $giorno = 0+$k;
                                $mese = $meseSettimana+1;
                                $k++;
                            }
                            else{
                                $giorno = $giornoCorrente+$i;
                                $mese = $meseSettimana;
                            }
                        }
                    break;
                } 
            }
            switch($giornoSettimana){
                case 0: //Domenica
                    for($i=0;$i<7;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i],$meseInCorso[$i],$annoInCorso[$i],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                    break;
                case 1: //Lunedi
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							$meseInCorso[0] = 12;
							$annoInCorso[0] = $annoSettimana-1;
						}
                        else
                            $meseInCorso[0] = $meseSettimana-1;
                    }
                    else
                        $meseInCorso[0] = $meseSettimana;
                    for($i=0;$i<6;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i+1],$meseInCorso[$i+1],$annoInCorso[$i+1],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                    break;
                case 2: //Martedi
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-2,$annoSettimana));
                    $settimanaInCorso[1] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							$meseInCorso[0] = 12;
                            $meseInCorso[1] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							$annoInCorso[1] = $annoSettimana-1;
                        }
                        else{
                            $meseInCorso[0] = $meseSettimana-1;
                            $meseInCorso[1] = $meseSettimana-1;
                        }
                    }
                    else if($giornoCorrente-2 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[0] = 12;
                            $meseInCorso[1] = $meseSettimana;
							$annoInCorso[0] = $annoSettimana-1;
							$annoInCorso[1] = $annoSettimana;
                        }
                        else{
							$meseInCorso[0] = $meseSettimana-1;
                            $meseInCorso[1] = $meseSettimana;
                        }
                    }
                    else{
                        $meseInCorso[0] = $meseSettimana;
                        $meseInCorso[1] = $meseSettimana;
                    }
                    for($i=0;$i<5;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i+2],$meseInCorso[$i+2],$annoInCorso[$i+2],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                    break;
                case 3: //Mercoledi
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-3,$annoSettimana));
                    $settimanaInCorso[1] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-2,$annoSettimana));
                    $settimanaInCorso[2] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<3;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
                        }
                        else{
							for($i=0;$i<3;$i++)
								$meseInCorso[$i] = $meseSettimana-1;
                        }
                    }
                    else if($giornoCorrente-2 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[1] = 12;
                            $meseInCorso[2] = 12;
                        }
                        else{
                            $meseInCorso[1] = $meseSettimana-1;
                            $meseInCorso[2] = $meseSettimana-1;
                        }
                    }
                    else if($giornoCorrente-3 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[2] = 12;
                        }
                        else{
                            $meseInCorso[2] = $meseSettimana-1;
                        }
                    }
                    else{
						for($i=0;$i<3;$i++)
							$meseInCorso[$i] = $meseSettimana;
                    }
                    for($i=0;$i<4;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i+3],$meseInCorso[$i+3],$annoInCorso[$i+3],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                    break;
                case 4: //Giovedi
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-4,$annoSettimana));
                    $settimanaInCorso[1] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-3,$annoSettimana));
                    $settimanaInCorso[2] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-2,$annoSettimana));
                    $settimanaInCorso[3] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<4;$i++){
                            $meseInCorso[$i] = 12;
							$annoInCorso[$i] = $annoSettimana-1;
							}
                        }
                        else{
							for($i=0;$i<4;$i++)
								$meseInCorso[$i] = $meseSettimana-1;
                        }
                    }
                    else if($giornoCorrente-2 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<3;$i++){
						    $meseInCorso[$i] = 12;
							$annoInCorso[$i] = $annoSettimana-1;
							}
                            $meseInCorso[3] = $meseSettimana;
							$annoInCorso[3] = $annoSettimana;
                        }
                        else{
							for($i=0;$i<3;$i++)
								$meseInCorso[$i] = $meseSettimana-1;
							$meseInCorso[3] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-3 <= 0){
                        if($meseSettimana-1 == 0){
							$meseInCorso[0] = 12;
                            $meseInCorso[1] = 12;
                            $meseInCorso[2] = $meseSettimana;
                            $meseInCorso[3] = $meseSettimana;
							$annoInCorso[0] = $annoSettimana-1;
							$annoInCorso[1] = $annoSettimana-1;
							$annoInCorso[2] = $annoSettimana;
							$annoInCorso[3] = $annoSettimana;
                        }
                        else{
                            $meseInCorso[0] = $meseSettimana-1;
                            $meseInCorso[1] = $meseSettimana-1;
                            $meseInCorso[2] = $meseSettimana;
                            $meseInCorso[3] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-4 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[0] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							for($i=1;$i<4;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
                            $meseInCorso[0] = $meseSettimana-1;
							for($i=1;$i<4;$i++){
								$meseInCorso[$i] = $meseSettimana;
							}
                        }
                    }
                    else{
						for($i=0;$i<4;$i++){
                        $meseInCorso[$i] = $meseSettimana;
						}
                    }
                    for($i=0;$i<3;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i+4],$meseInCorso[$i+4],$annoInCorso[$i+4],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                break;
                case 5: //Venerdi
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-5,$annoSettimana));
                    $settimanaInCorso[1] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-4,$annoSettimana));
                    $settimanaInCorso[2] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-3,$annoSettimana));
                    $settimanaInCorso[3] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-2,$annoSettimana));
                    $settimanaInCorso[4] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<5;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
                        }
                        else{
                            for($i=0;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
                        }
                    }
                    else if($giornoCorrente-2 <= 0){
                        if($meseSettimana-1 == 0){
                            for($i=0;$i<4;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
							$meseInCorso[4] = $meseSettimana;
							$annoInCorso[4] = $annoSettimana;
                        }
                        else{
                            for($i=0;$i<4;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
                            $meseInCorso[4] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-3 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<3;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
                            $meseInCorso[3] = $meseSettimana;
							$meseInCorso[4] = $meseSettimana;
							$annoInCorso[3] = $annoSettimana;
							$annoInCorso[4] = $annoSettimana;
                        }
                        else{
							for($i=0;$i<3;$i++){
								$meseInCorso[$i] = $meseSettimana-1;;
							}
                            $meseInCorso[3] = $meseSettimana;
                            $meseInCorso[4] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-4 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[0] = 12;
                            $meseInCorso[1] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							$annoInCorso[1] = $annoSettimana-1;
							for($i=2;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
                            $meseInCorso[0] = $meseSettimana-1;
                            $meseInCorso[1] = $meseSettimana-1;
                            for($i=2;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana;
							}
                        }
                    }
                    else if($giornoCorrente-5 <= 0){
                        if($meseSettimana-1 == 0){
							$meseInCorso[0] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							for($i=1;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
							$meseInCorso[0] = $meseSettimana-1;
							for($i=1;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                    }
                    else{
						for($i=0;$i<5;$i++)
							$meseInCorso[$i] = $meseSettimana;
                    }              
                    for($i=0;$i<2;$i++){
                        calcNuovoGiornoMeseAnno($settimanaInCorso[$i+5],$meseInCorso[$i+5],$annoInCorso[$i+5],$i,$k,$annoSettimana,$meseSettimana,$giornoCorrente);
                    }
                break;
                case 6: //Sabato
                    $settimanaInCorso[0] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-6,$annoSettimana));
                    $settimanaInCorso[1] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-5,$annoSettimana));
                    $settimanaInCorso[2] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-4,$annoSettimana));
                    $settimanaInCorso[3] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-3,$annoSettimana));
                    $settimanaInCorso[4] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-2,$annoSettimana));
                    $settimanaInCorso[5] = date('d',mktime(0,0,0,$meseSettimana,$giornoCorrente-1,$annoSettimana));
                    $settimanaInCorso[6] = $giornoCorrente;
                    if($giornoCorrente-1 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<6;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
                        }
                        else{
                            for($i=0;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
                        }
                    }
                    else if($giornoCorrente-2 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<5;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
							$meseInCorso[5] = $meseSettimana-1;
							$annoInCorso[5] = $annoSettimana;
                        }
                        else{
							for($i=0;$i<5;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
                            $meseInCorso[5] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-3 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<4;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
							$meseInCorso[4] = $meseSettimana;
							$meseInCorso[5] = $meseSettimana;
							$annoInCorso[4] = $annoSettimana;
							$annoInCorso[5] = $annoSettimana;
                        }
                        else{
							for($i=0;$i<4;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
                            $meseInCorso[4] = $meseSettimana;
                            $meseInCorso[5] = $meseSettimana;
                        }
                    }
                    else if($giornoCorrente-4 <= 0){
                        if($meseSettimana-1 == 0){
							for($i=0;$i<3;$i++){
								$meseInCorso[$i] = 12;
								$annoInCorso[$i] = $annoSettimana-1;
							}
							for($i=3;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
							for($i=0;$i<3;$i++){
								$meseInCorso[$i] = $meseSettimana-1;
							}
							for($i=3;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
							}
                        }
                    }
                    else if($giornoCorrente-5 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[0] = 12;
                            $meseInCorso[1] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							$annoInCorso[1] = $annoSettimana-1;
							for($i=2;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
							$meseInCorso[0] = $meseSettimana-1;
                            $meseInCorso[1] = $meseSettimana-1;
							for($i=2;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
							}
                        }
                    }
                    else if($giornoCorrente-6 <= 0){
                        if($meseSettimana-1 == 0){
                            $meseInCorso[0] = 12;
							$annoInCorso[0] = $annoSettimana-1;
							for($i=1;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
								$annoInCorso[$i] = $annoSettimana;
							}
                        }
                        else{
							$meseInCorso[0] = $meseSettimana-1;
							for($i=1;$i<6;$i++){
								$meseInCorso[$i] = $meseSettimana;
							}
                            $meseInCorso[0] = $meseSettimana-1;
                        }
                    }
                    else{
						for($i=0;$i<7;$i++)
							$meseInCorso[$i] = $meseSettimana;
                    }
					$meseInCorso[6] = $meseSettimana;					
                break;
            }
            echo "<tr><td class='Campo1'><b>Orario</b></td></td>";
			function aggiustaFormato(&$valore){
				switch($valore){
					case 1:
						$valore = "01";
						break;
					case 2:
						$valore = "02";
						break;
					case 3:
						$valore = "03";
						break;
					case 4:
						$valore = "04";
						break;
					case 5:
						$valore = "05";
						break;
					case 6:
						$valore = "06";
						break;
					case 7:
						$valore = "07";
						break;
					case 8:
						$valore = "08";
						break;
					case 9:
						$valore = "09";			
						break;
				}
			}
            for ($i=0;$i<7;$i++){
				aggiustaFormato($settimanaInCorso[$i]);
				aggiustaFormato($meseInCorso[$i]);
				aggiustaFormato($annoInCorso[$i]);
                if(($i == $giornoSettimana) AND ($giornoCorrente == date("d",time())) )
					echo "<td class='Campo2'><b>$giorni[$i] $settimanaInCorso[$i]/$meseInCorso[$i]/$annoInCorso[$i]</b></td>";
                else
                    echo "<td class='Campo1'><b>$giorni[$i] $settimanaInCorso[$i]/$meseInCorso[$i]/$annoInCorso[$i]</b></td>";
            }
            echo "</tr>";
            $gruppi = array(NULL);
            $stanza = array(NULL);
            $note = array(NULL);
            $k=0;
            for ($i=12;$i<24;$i++){
                if($i==date("H",time()))
                    echo "<tr><td class='ora'><b>$i</b></td>";
                else
                    echo "<tr><td class='oraCol'><b>$i</b></td>";
                for($j=0;$j<7;$j++){
                    $cercaAttivita = "
                        SELECT*
                        FROM Stanze 
                        WHERE GiornoPeriodico = '$j' 
                            AND 
                            (OrarioInizio = '$ore[$i]'
                                OR OrarioFine = '$ore[$i]'
                                OR ('$ore[$i]'>OrarioInizio AND '$ore[$i]'<OrarioFine)
                            )
                            OR (GiornoPeriodico = -1
                                AND GiornoSpecifico = '$settimanaInCorso[$j]'
                                AND MeseSpecifico = '$meseSettimana'
                                AND (OrarioInizio = '$ore[$i]'
                                        OR OrarioFine = '$ore[$i]'
                                        OR (
                                            '$ore[$i]'>OrarioInizio 
                                                AND '$ore[$i]'<OrarioFine)
                                )

                                )
                            ";
                    $result = $UserDb->performQuery($cercaAttivita);
                    while($row = $result->fetch_assoc()){
                        $gruppi[$k] =$row['Responsabile'];
                        $stanza[$k] = $row['Stanza'];
                        $note[$k] = $row['Note'];
                        $k++;
                    }
                    if(mysqli_num_rows($result)==0){
                        if($i == date("H",time()) AND ($j == $giornoSettimana) AND $giornoCorrente==date("d",time()))
                            echo "<td class='ora'><i>Prenotabile</i></td>";
                        else
                            echo "<td><i>Prenotabile</i></td>";
                    }
                    else{
                        if($i == date("H",time()) AND ($j == $giornoSettimana))
                            echo "<td class='ora'>";
                        else
                            echo "<td>";
                        for($t=0;$t<count($gruppi);$t++){
                            echo "$gruppi[$t]<br>";
                            if($stanza[$t]==1)
                                echo "<h4 class='Stanza'>Stanza vecchia</h4><br>";
                            else if($stanza[$t]==2)
                                echo "<h4 class='Stanza'>Stanza vecchia (sopra)</h4><br>";
                            else if($stanza[$t]==3)
                                echo "<h4 class='Stanza'>Stanza nuova</h4><br>";
                    }
                    echo "</td>";
                
                //Svuoto i gruppi per questa ora
                    $gruppi=array(NULL);
                    $note=array(NULL);
                    $k=0;
                    }
                }
            echo "</tr>";
            }
        ?>
        </table>
        <img id="gap-image2" src="./../css/Immagini/Sfondi/gap2.jpeg" alt="imgGap2">
        <div id="Prenotazioni">
			<h2>Prenota</h2>
			<p id="prenotaP">Puoi prenotare una stanza al massimo per le prossime 4 settimane</p>
			<form method="post" name="modulo">
				<div id="pre1">
					<p>Seleziona il <b>giorno</b>: </p><input type="date" name="data" id="data" required>
					<p>Scegli <b>l'ora di inizio</b>  <input class="oraP" type="number" id="oraI" name="oraI" value="18" min="12" max="23"></p>
					<p>Scegli <b>l'ora di fine</b>  <input class="oraP" type="number" id="oraF" name="oraF" value="19" min="12" max="23"></p>
				</div>
				<div id="pre2">
					<p>Scegli la <b>stanza</b>
					<select id="stanza" name="stanza">
						<option value=1>Vecchia</option>
						<option value=2>Vecchia (sopra)</option>
						<option value=3>Nuova</option>
					</select></p>
					<p>Indica il tipo di <b>attività</b></p>
					<textarea rows="5" cols="30" id="attivita" name="attivita" placeholder="Es: Compleanno di Mario Rossi. Saremo circa 50 persone."></textarea>
					<br><input type="submit" value="Prenota" name="Prenota" id="Prenota">
				</div>
			</form>
            <?php
            include_once "./GestioneDB/DBmanager.php";
            global $UserDB;
            if(isset($_POST['Prenota'])){
                $persona = $_SESSION['user'];
                $dataP = filter_input(INPUT_POST,'data');
                $stanzaP = filter_input(INPUT_POST,'stanza');
                $giornoP = date('d',strtotime($dataP));
                $meseP = date('m',strtotime($dataP));
                $annoP = date('y',strtotime($dataP));
                $oraIP = filter_input(INPUT_POST,'oraI');
                $oraFP = filter_input(INPUT_POST,'oraF');
                $attivitaP = filter_input(INPUT_POST,'attivita');
                
                $giornoPSettimana = date('w',strtotime($dataP));
                //Verifico se è una data valida
                $giornoMax = date('Y-m-d', strtotime('+28 days'));

                if(($dataP< date('Y-m-d',time()))||($dataP > $giornoMax)){
                    echo "<script>\n";
                    echo "alert('Devi inserire una data compresa fra oggi e il prossimo mese')\n";
                    echo "</script>";
                    return;
                }
                
                $trovaGruppiParrocchiali = "
                    SELECT* 
                    FROM Stanze
                    WHERE GiornoPeriodico = '$giornoPSettimana'
                        AND Stanza = '$stanzaP'
                        AND (('$oraIP' BETWEEN OrarioInizio AND OrarioFine) OR
                            ('$oraFP' BETWEEN OrarioInizio AND OrarioFine))";
                
                $trovaGruppiNonParrocchiali = "
                        SELECT* 
                        FROM Stanze
                        WHERE GiornoSpecifico = '$giornoP'
                            AND MeseSpecifico = '$meseP'
                            AND AnnoSpecifico = '$annoP'
                            AND Stanza = '$stanzaP'
                            AND (('$oraIP' BETWEEN OrarioInizio AND OrarioFine) OR
                                    ('$oraFP' BETWEEN OrarioInizio AND OrarioFine))";
                $resultGruppiParrocchiali = $UserDb->performQuery($trovaGruppiParrocchiali);
                $resultGruppiNonParrocchiali = $UserDb->performQuery($trovaGruppiNonParrocchiali);
                if((mysqli_num_rows($resultGruppiParrocchiali)==0) && (mysqli_num_rows($resultGruppiNonParrocchiali)==0)){
                    $insertPrenotazione = "INSERT INTO Stanze
                                        VALUES (DEFAULT,'$stanzaP',-1,'$giornoP','$meseP','$annoP','$oraIP','$oraFP',0,'$persona','$attivitaP');";
                    $UserDb->performQuery($insertPrenotazione);
                    echo "<script>\n";
                    echo "alert('Complimenti: hai inserito una prenotazione con successo!')\n";
                    echo "</script>";
                }
                else{
                    echo "<script>\n";
                    echo "alert('ATTENZIONE: la stanza richiesta è già occupata!')\n";
                    echo "</script>";
                }
            }
            ?>
        </div>
        <img id="gap-image" src="./../css/Immagini/Sfondi/gap1.jpeg" alt="imgGap1">
    </div>
</div>
</body>
</html>
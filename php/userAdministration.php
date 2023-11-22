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
<script src="https://smtpjs.com/v3/smtp.js"></script>  
    <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
    <meta charset="utf-8">
    <meta name="author" content="FedericoGiacomelli">
    <link rel="stylesheet" href="./../css/userAdministration.css">
    <title>Gestione utenti - Parrocchia di Badia San Savino</title>
    <script>
        function go(){
            location.href = "./../php/home.php";
        }
        function evidenzia(){
            var home = document.getElementById("imgHome");
            home.style.cursor = "pointer";
        }
    </script>
</head>
<body>
<div id="container">
    <div id="top">
        <img id="imgHome" src="./../css/Immagini/Icone/Home.png" alt="imgHome" onclick="go()" onmouseover="evidenzia()">
        <header>
            <img id='imgUser' src='./../css/Immagini/Icone/gruppo.png' alt='imgAdd'>
        </header>
        <form action="./logout.php" method="post">
            <input id="imgOut" type="image" src="./../css/Immagini/Icone/Logout.png" alt="imgOut" name="exit">
        </form>
    </div>
    <div id="scelta">
        <h1 id="title">Scegli la categoria di utenti</h1>
        <form method="post">
            <input type="submit" class="tipoUtenti" name="badiesi" id="badiesi" value="Badiesi">
            <input type="submit" class="tipoUtenti" name="daApprovare" id="daApprovare" value="Da approvare">
        </form>
    </div>
    <main>
        <?php
        function generaBadiesi(){
            include_once "./gestioneDB/DBmanager.php";
            global $UserDb;
            echo "<h1 id='titleAll'>Badiesi</h1>";
            echo "<div id='spazioTutti'>";
            echo "<table id='tutti'>";
            echo "<tr class='campi'><td>ID</td><td>USERNAME</td><td>NOME</td><td>COGNOME</td><td>SESSO</td><td>DATA DI NASCITA</td><td>MAIL</td><td>NOTE</td><td>GRUPPI</td><td>RUOLO</td><td>ANNO</td>";
            $utenti = array();
            $numeroAttivitaUtenti = array();
            $cercaInfo = "SELECT* FROM Utente";
            $infoUtenti = $UserDb->performQuery($cercaInfo);
            $i=0;
            $j=0;
            while($row = $infoUtenti->fetch_assoc()){
                $utenti[0][$i] = $row['ID'];
                $utenti[1][$i] = $row['Username'];
                $userInteressato = $row['Username'];
                $utenti[2][$i] = $row['Nome'];
                $utenti[3][$i] = $row['Cognome'];
                $utenti[4][$i] = $row['Sesso'];
                $utenti[5][$i] = $row['DataNascita'];
                aggiustaData($utenti[5][$i]);
                $utenti[6][$i] = $row['Mail'];
                $utenti[7][$i] = $row['Note'];
                $cercaAttivita = "SELECT Gruppo,Ruolo,Anno FROM Utente U INNER JOIN Svolge S ON U.Username = S.ID WHERE U.Username='$userInteressato' GROUP BY Gruppo,Anno ORDER BY Anno DESC";
                $infoAttivita = $UserDb->performQuery($cercaAttivita);
                $j=0;
                while($rowAttivita = $infoAttivita->fetch_assoc()){
                    $utenti[8][$i][$j] = $rowAttivita['Gruppo'];
                    aggiustaNomi($utenti[8][$i][$j]);
                    $utenti[9][$i][$j] = $rowAttivita['Ruolo'];
                    $utenti[10][$i][$j] = $rowAttivita['Anno'];
                    $j++;
                }
                $numeroAttivitaUtenti[$i] = $j;
                $i++;
            }
            for($riga=0;$riga<$i;$riga++){
                if($riga%2==0)
                    echo "<tr class='alterno'>";
                else
                    echo "<tr>";
                for($colonna=0;$colonna<11;$colonna++){
                    echo "<td>";
                    if($colonna==8 OR $colonna==9 OR $colonna==10){
                        for($gruppiSvolti=0;$gruppiSvolti<$numeroAttivitaUtenti[$riga];$gruppiSvolti++){
                            echo $utenti[$colonna][$riga][$gruppiSvolti];
                            echo "<br>";
                        }
                    }
                    else
                        echo $utenti[$colonna][$riga];
                    echo "</td>";
                }
                echo "</tr>";
            }
            for($riga=0;$riga<$i;$riga++){
                if($riga%2==0)
                    echo "<tr class='alterno'>";
                else
                    echo "<tr>";
                for($colonna=0;$colonna<11;$colonna++){
                    echo "<td>";
                    if($colonna==8 OR $colonna==9 OR $colonna==10){
                        for($gruppiSvolti=0;$gruppiSvolti<$numeroAttivitaUtenti[$riga];$gruppiSvolti++){
                            echo $utenti[$colonna][$riga][$gruppiSvolti];
                            echo "<br>";
                        }
                    }
                    else
                        echo $utenti[$colonna][$riga];
                    echo "</td>";
                }
                echo "</tr>";
            }
            for($riga=0;$riga<$i;$riga++){
                if($riga%2==0)
                    echo "<tr class='alterno'>";
                else
                    echo "<tr>";
                for($colonna=0;$colonna<11;$colonna++){
                    echo "<td>";
                    if($colonna==8 OR $colonna==9 OR $colonna==10){
                        for($gruppiSvolti=0;$gruppiSvolti<$numeroAttivitaUtenti[$riga];$gruppiSvolti++){
                            echo $utenti[$colonna][$riga][$gruppiSvolti];
                            echo "<br>";
                        }
                    }
                    else
                        echo $utenti[$colonna][$riga];
                    echo "</td>";
                }
                echo "</tr>";
            }
            for($riga=0;$riga<$i;$riga++){
                if($riga%2==0)
                    echo "<tr class='alterno'>";
                else
                    echo "<tr>";
                for($colonna=0;$colonna<11;$colonna++){
                    echo "<td>";
                    if($colonna==8 OR $colonna==9 OR $colonna==10){
                        for($gruppiSvolti=0;$gruppiSvolti<$numeroAttivitaUtenti[$riga];$gruppiSvolti++){
                            echo $utenti[$colonna][$riga][$gruppiSvolti];
                            echo "<br>";
                        }
                    }
                    else
                        echo $utenti[$colonna][$riga];
                    echo "</td>";
                }
                echo "</tr>";
            }
            echo "</table>";
            echo "</div>";
        }
        if(isset($_POST["daApprovare"])){
            echo "<h1 id='titleAll'>Da approvare</h1>";
            $utenti = array();
            $numeroAttivitaUtenti = array();
            $cercaInfo = "SELECT* FROM Utente WHERE Controllo = 0";
            $infoUtenti = $UserDb->performQuery($cercaInfo);
            if(mysqli_num_rows($infoUtenti)==0){
                echo "<div id='spazioInApprovazioneVuoto'>";
                echo "<table id='daApprovareVuota'>";
                echo "<tr>";
                echo "<td><b>NON</b> ci sono persone da approvare al momento</td>";
                echo "</tr>";
            }
            else{
                echo "<div id='spazioInApprovazione'>";
                echo "<table id='daApprovare'>";
                echo "<tr class='campi'><td>ID</td><td>USERNAME</td><td>NOME</td><td>COGNOME</td><td>SESSO</td><td>DATA DI NASCITA</td><td>MAIL</td><td>GRUPPI</td><td>RUOLO</td><td>ANNO</td><td><b>APPROVA</b></td>";
                $i=0;
                $j=0;
                while($row = $infoUtenti->fetch_assoc()){
                    $utenti[0][$i] = $row['ID'];
                    $userInteressato = $utenti[0][$i];
                    $utenti[1][$i] = $row['Username'];
                    $utenti[2][$i] = $row['Cognome'];
                    $utenti[3][$i] = $row['Sesso'];
                    $utenti[4][$i] = $row['DataNascita'];
                    aggiustaData($utenti[4][$i]);
                    $utenti[5][$i] = $row['Mail'];
                    $utenti[6][$i] = $row['Note'];
                    $cercaAttivita = "SELECT Gruppo,Ruolo,Anno FROM Utente U INNER JOIN Svolge S ON U.Username = S.ID WHERE U.Username='$userInteressato' GROUP BY Gruppo,Anno ORDER BY Anno DESC";
                    $infoAttivita = $UserDb->performQuery($cercaAttivita);
                    $j=0;
                    while($rowAttivita = $infoAttivita->fetch_assoc()){
                        $utenti[7][$i][$j] = $rowAttivita['Gruppo'];
                        aggiustaNomi($utenti[7][$i][$j]);
                        $utenti[8][$i][$j] = $rowAttivita['Ruolo'];
                        $utenti[9][$i][$j] = $rowAttivita['Anno'];
                        $j++;
                    }
                    $numeroAttivitaUtenti[$i] = $j;
                    $i++;
                }
                for($riga=0;$riga<$i;$riga++){
                    if($riga%2==0)
                        echo "<tr class='alterno'>";
                    else
                        echo "<tr>";
                    for($colonna=0;$colonna<11;$colonna++){
                        echo "<td>";
                        if($colonna==10){
                            echo "<form method='post' name='modulo'>";
                            $idUtenteInteressato = $utenti[0][$riga];
                            $userUtenteInteressato = $utenti[1][$riga];
                            echo "<input type='text' name='idTextInteressato' value='$idUtenteInteressato' hidden>";
                            echo "<input type='text' name='userTextInteressato' value='$userUtenteInteressato' hidden>";
                            echo "<input type='submit' class='btnApprova' name='approvaUtente' id='approvaUtente' value='APPROVA'>";
                            echo "</form>";
                            echo "</td>";
                            break;
                        }
                        if($colonna==7 OR $colonna==8 OR $colonna==9){
                            for($gruppiSvolti=0;$gruppiSvolti<$numeroAttivitaUtenti[$riga];$gruppiSvolti++){
                                echo $utenti[$colonna][$riga][$gruppiSvolti];
                                echo "<br>";
                            }
                        }
                        else
                            echo $utenti[$colonna][$riga];
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            }
            echo "</table>";
            echo "</div>";
        }
    else if(isset($_POST["badiesi"])){
        generaBadiesi();
    }
    else
        generaBadiesi();
    if(isset($_POST['approvaUtente'])){
        $idInteressato = $_POST['idTextInteressato'];
        $userInteressato = $_POST['userTextInteressato'];
        $updateStato = "UPDATE Utente SET Controllo = 0 WHERE ID = '$idInteressato'";
        $UserDb->performQuery($updateStato);

        $to_email_address = "fe.giac99@hotmail.it";
        $subject = "Prova";
        $message = "Prova messaggio";$headers = 'From: noreply @ company . com';
        mail($to_email,$subject,$message,$headers);

        echo "This email is sent using PHP Mail";
        echo "<script>\n"; 
        echo "window.alert('ATTENZIONE: hai appena verificato $userInteressato!');\n";
        echo "</script>";
    }
    ?>
</div>
</body>
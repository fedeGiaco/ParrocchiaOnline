<?php
session_start();
include "./gestioneDB/sessionUtil.php";

if (!isLogged()){
    header('Location: ./../index.php');
    exit;
}

require_once "./gestioneDB/DBmanager.php";
global $UserDb;
$q=$_GET["q"];

$i=0;
$resultSearch = array();
$persona = $_SESSION['user'];
if (strlen($q)>0) {
    if($persona=="Ospite")
        $cercaSql = "SELECT Titolo FROM PostUtenti WHERE ((Titolo LIKE '%$q%') OR (Testo LIKE '%$q%')) AND Utenza = 'all'";
    else
        $cercaSql = "SELECT Titolo FROM PostUtenti WHERE ((Titolo LIKE '%$q%') OR (Testo LIKE '%$q%')) AND (Utenza = 'all' OR Utenza = 'allB')";
    $resultSql = $UserDb->performQuery($cercaSql);
    while($row = $resultSql->fetch_assoc()){
        $resultSearch[$i] = $row['Titolo'];
        $i++;
    }
}
if($i==0){
    echo "<p id='noPostFound'>Nessun risultato trovato :(</p>";
}
$persona = $_SESSION['user'];
for($j=0;$j<$i;$j++){
    $dati = "SELECT ID,Titolo,Testo,Immissione,Proprietario from PostUtenti WHERE Titolo='$resultSearch[$j]'";    
    $datiImmessi = $UserDb->performQuery($dati);
    while($row = $datiImmessi->fetch_assoc()){
        $idPost = $row['ID'];
        $titolo = $row['Titolo'];
        $testo = $row['Testo'];
        $time = $row['Immissione'];
        $proprietario = $row['Proprietario'];
        $immissione = $row['Immissione']; 
        //<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
        echo "<div class='postS' id='post$idPost'>";
        echo "<h3 class='postTitle'>$titolo</h3>";
        echo "<p class='postText'>$testo</p>";
        $fileUtente = "SELECT * FROM tabellaFile WHERE Immissione='$time' AND Proprietario='$proprietario'";
        $fileUtenteImmessi = $UserDb->performQuery($fileUtente);
        if(mysqli_num_rows($fileUtenteImmessi)){
            while ($tmp = mysqli_fetch_array($fileUtenteImmessi)){
                if($tmp['Tipo'] == ("image/png") OR 
                    $tmp['Tipo'] == ("image/jpeg") OR
                    $tmp['Tipo'] == ("image/JPG")
                    )
                    echo "<a href=\"open.php?id=$tmp[ID]\"><img class='postImg' src=\"open.php?id=$tmp[ID]\" alt='imgUser'></a>\n";
                    else
                        echo "<p><a class='postLink'href=\"open.php?id=$tmp[ID]\">$tmp[Nome]</a></p>\n";
                }
        }
        $immissione = strtotime($immissione);
        $giorno = date("d",$immissione);
        $mese = date("m",$immissione);
        $anno = date("y",$immissione);
        $ora = date("H",$immissione);
        $minuto = date("i",$immissione);
        echo "<p class='postDettagli'><i>$proprietario, <br>$giorno/$mese/$anno $ora:$minuto</i></p>"; 
        if ($persona == $proprietario){
            echo "<form method='post' action='./remove.php'>";
            echo "<input type='text' name='idPo' value='$idPost' hidden>";                      
            echo "<input type='submit' name='cancella' class='cancella' value='Elimina post' id='$idPost'>";                      
            echo "</form>"; 
        }
        echo "<div class='postCommento' id='commenti$idPost'>";
        echo "<form method='post' action='./addComment.php'>";
        echo "<img class='postTitleCommento'src='./../css/Immagini/Icone/Commenti.png'>";
        echo "<input type='text' name='idPo' value='$idPost' hidden>";  
        echo "<textarea class='postTextCommento' rows='2' cols='32' id='commento$idPost' name='commento$idPost' placeholder='Commenta questo post se ti va!'></textarea>";               
        echo "<input class='postCommentGo' type='image' src='./../css/Immagini/Pulsanti/Reg.png'>";
        echo "</form>"; 
        $cercaCommenti = "
            SELECT IDPost,Proprietario,Testo,Immissione
            FROM PostCommenti
            WHERE IDPost = '$idPost'
            GROUP BY Immissione
            ORDER BY Immissione DESC
        ";
        $resultCommenti = $UserDb->performQuery($cercaCommenti);
        while($rowCommento = $resultCommenti->fetch_assoc()){
            $proprietarioCommento = $rowCommento["Proprietario"];
            $testoCommento = $rowCommento["Testo"];
            $immissioneCommento = $rowCommento["Immissione"];
            $immissioneCommento = strtotime($immissioneCommento);
            $giornoCommento = date("d",$immissioneCommento);
            $meseCommento = date("m",$immissioneCommento);
            $annoCommento = date("y",$immissioneCommento);
            $oraCommento = date("H",$immissioneCommento);
            $minutoCommento = date("i",$immissioneCommento);
            echo "<p class='postTestiCommenti'><b><i>$proprietarioCommento</b></i> $testoCommento <i>($giornoCommento/$meseCommento/$annoCommento)</i></p>";
        }
        echo "</div>";
    }
    echo "</div>";
}
?> 
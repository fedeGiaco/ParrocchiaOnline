<?php
global $UserDb;
function ricercaPerPersonaEData(&$interessato,&$ut,&$range,&$giorniMax,&$controlloPersona,&$ciSonoPost,&$ultimoId,&$primoId){
    $persona = $_SESSION['user'];
    if($ut=='all'){
        $scelta1 = 'all';
        $scelta2 = 'allB';
    }
    else{
        $scelta1 = $ut;
        $scelta2 = $ut;
    }
    if($interessato!='all'){
        $giorniMax = $range;
        if($persona=="Ospite"){
            $ciSonoPost = "SELECT* FROM PostUtenti WHERE Utenza = '$ut' AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range";
            $ultimoId = " SELECT ID FROM PostUtenti PU WHERE Utenza = '$ut' AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID > PU.ID AND PU2.Utenza = '$ut' AND PU2.Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
            $primoId = " SELECT ID FROM PostUtenti PU WHERE Utenza = '$ut' AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID < PU.ID AND PU2.Utenza = '$ut' AND PU2.Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
        }
        else{
            $ciSonoPost = "SELECT* FROM PostUtenti WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range";
            $ultimoId = " SELECT ID FROM PostUtenti PU WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID > PU.ID AND (PU2.Utenza = '$scelta1' OR PU2.Utenza = '$scelta2') AND PU2.Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
            $primoId = " SELECT ID FROM PostUtenti PU WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID < PU.ID AND (PU2.Utenza = '$scelta1' OR PU2.Utenza = '$scelta2') AND PU2.Proprietario = '$interessato' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
        }
    }
    else{
        $giorniMax = $range;
        $controlloPersona = "all";
        if($persona=="Ospite"){
            $ciSonoPost = "SELECT* FROM PostUtenti WHERE Utenza = '$ut' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range";
            $ultimoId = " SELECT ID FROM PostUtenti PU WHERE Utenza = '$ut' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID > PU.ID AND PU2.Utenza = '$ut' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
            $primoId = " SELECT ID FROM PostUtenti PU WHERE Utenza = '$ut' AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID < PU.ID AND PU2.Utenza = '$ut' AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
        }
        else{
            $ciSonoPost = "SELECT* FROM PostUtenti WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,Immissione)<=$range";
            $ultimoId = " SELECT ID FROM PostUtenti PU WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID > PU.ID AND (PU2.Utenza = '$scelta1' OR PU2.Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
            $primoId = " SELECT ID FROM PostUtenti PU WHERE (Utenza = '$scelta1' OR Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,Immissione)<=$range AND NOT EXISTS(SELECT* FROM PostUtenti PU2 WHERE PU2.ID < PU.ID AND (PU2.Utenza = '$scelta1' OR PU2.Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,PU2.Immissione)<=$range)";
        }
    }
}           
function recuperaPost($ciSonoPost,$ultimoId,$primoId,$controlloPersona,$persona,$giorniMax,$ut){
    global $UserDb;
    if($ut=='all'){
        $scelta1 = 'all';
        $scelta2 = 'allB';
    }
    else{
        $scelta1 = $ut;
        $scelta2 = $ut;
    }
    $resultPost = $UserDb->performQuery($ciSonoPost);
    if(mysqli_num_rows($resultPost)>0){
        $resultUltimoID = $UserDb->performQuery($ultimoId);
        $resultPrimoID = $UserDb->performQuery($primoId);
        while($row = $resultUltimoID->fetch_assoc())
            $idBase = $row['ID'];
        while($row = $resultPrimoID->fetch_assoc())
            $idFine = $row['ID'];
        for($i=0;$i<mysqli_num_rows($resultPost);$i++){
            if($controlloPersona=="all"){
                if($persona=="Ospite")
                    $dati = "SELECT ID,Titolo,Testo,Immissione,Proprietario from PostUtenti WHERE ID='$idBase' AND Utenza='$ut' AND DATEDIFF(CURRENT_DATE,Immissione)<='$giorniMax'";
                else
                    $dati = "SELECT ID,Titolo,Testo,Immissione,Proprietario from PostUtenti WHERE ID='$idBase' AND (Utenza = '$scelta1' OR Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,Immissione)<='$giorniMax'";
            }
            else{
                if($persona=="Ospite")
                    $dati = "SELECT ID,Titolo,Testo,Immissione,Proprietario from PostUtenti WHERE ID='$idBase'AND Proprietario = '$interessato' AND Utenza='$ut' AND DATEDIFF(CURRENT_DATE,Immissione)<='$giorniMax'";
                else
                    $dati = "SELECT ID,Titolo,Testo,Immissione,Proprietario from PostUtenti WHERE ID='$idBase'AND Proprietario = '$interessato' AND (Utenza = '$scelta1' OR Utenza = '$scelta2') AND DATEDIFF(CURRENT_DATE,Immissione)<='$giorniMax'";
            }
            $datiImmessi = $UserDb->performQuery($dati);
            if(mysqli_num_rows($datiImmessi)==0)
                $i--;
            else{
                while($row = $datiImmessi->fetch_assoc()){
                    $idPost = $row['ID'];
                    $titolo = $row['Titolo'];
                    $testo = $row['Testo'];
                    $time = $row['Immissione'];
                    $proprietario = $row['Proprietario'];
                    $immissione = $row['Immissione']; 
                    //<div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
                    echo "<div class='post' id='post$idPost'>";
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
                        if($ut!='all')
                            echo "<form method='post' action='./../remove.php'>";
                        else
                            echo "<form method='post' action='./remove.php'>";
                            echo "<input type='text' name='idPo' value='$idPost' hidden>"; 
                            echo "<input type='text' name='idGruppo' value='$ut' hidden>";                     
                            echo "<input type='submit' name='cancella' class='cancella' value='Elimina post' id='$idPost'>";                      
                        echo "</form>"; 
                    }
                    if ($persona != 'Ospite'){
                        echo "<div class='postCommento' id='commenti$idPost'>";
                        if($ut!='all')
                        echo "<form method='post' action='./../addComment.php'>";
                        else
                        echo "<form method='post' action='./addComment.php'>";
                            if($ut!='all')
                                echo "<img class='postTitleCommento' src='./../../css/Immagini/Icone/Commenti.png'>";
                            else
                                echo "<img class='postTitleCommento' src='./../css/Immagini/Icone/Commenti.png'>";
                            echo "<input type='text' name='idPo' value='$idPost' hidden>"; 
                            echo "<input type='text' name='idGruppo' value='$ut' hidden>";
                            echo "<textarea class='postTextCommento' rows='2' cols='32' id='commento$idPost' name='commento$idPost' placeholder='Commenta questo post se ti va!'></textarea>";               
                            if($ut!='all')
                                echo "<input class='postCommentGo' type='image' src='./../../css/Immagini/Pulsanti/Reg.png'>";
                            else
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
                }
                echo "</div>";
            }
            $idBase--;
        } 
    }  
    else
        echo "<p id='noPost'>Non ci sono post!</p>";
}
?>
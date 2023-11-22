<!DOCTYPE html>
<html lang="it">
<head>
    <link rel="shortcut icon" type="image/x-icon" href="./../css/Immagini/Loghi/LogoMini.png">
    <link rel="stylesheet" href="./../css/registrationStyle.css">
    <title>Registrazione</title>
    <script src="./../js/registrationScript.js"></script>
</head>
<body onload="begin()">
    <div id="imgBegin">
        <div id="begin">
            <h2 id="title">Parrocchia di Badia San Savino</h2>
            <img id="logo" src="./../css/Immagini/Loghi/LogoBuono.png" alt="Logo">
        </div>
        <div id="textBegin">
            <h3 id="welcome">Benvenuto nella schermata di registrazione!<br></h3>
            <p id="desc">
                Sei pregato di compilare ogni campo come richiesto.<br>
                Una volta inviati i dati, non potrai immediatamente accedere al sito come Badiese ma dovrai attendere una mail che ti informer&#224
                del fatto che puoi effettuare correttamente il login.<br><br>
                Si prega di selezionare al massimo 5 gruppi fra quelli frequentati attualmente e quelli frequentati.
            </p>    
        </div>
    </div>
    <div id="Container">
        <form method="post" name="modulo">
            <br>
            <fieldset id="infoVarie">
                <fieldset id="Anagrafica">
                    <p class="miniTitolo"><b>Anagrafica</b></p>
					<img id="imgAna" src="./../css/Immagini/Index/Documento.png" alt="Logo">
                    <p class="elemIni">Nome: <input type="text" name="nome" pattern="[a-zA-Z\s]+" placeholder="Es: Mario" required></p>
                    <p class="elemIni">Cognome: <input type="text" name="cognome" pattern="[a-zA-Z\s]+" placeholder="Es: Rossi" required></p>
                    <p class="elemIni">Data di nascita: <input type="date" name="data" required></p>
                    <p class="elemIni">Sesso: <select name="sesso"><option value="F">F</option><option value="M">M</option></select></p>
				</fieldset>
                <fieldset id="Credenziali">
                    <p class="miniTitolo"><b>Credenziali</b></p>
					<img id="imgCre" src="./../css/Immagini/Index/Password.png" alt="Logo">
                    <p class="elemIni">Mail: <input type="email" name="mail" placeholder="Es: mario.rossi@mail.it" required></p>
                    <p class="elemIni">Username: <input type="text" name="user" placeholder="marioRossiX" required></p>
                    <p class="elemIni">Password: <input type="password" name="pass" required></p>
                    <p class="elemIni">Verifica password: <input type="password" name="verpass" onmouseleave="verificaPassword()" required></p>
                </fieldset>
            </fieldset>
			<div id="gruppiOggi">
                <h2 class="titoliGruppi">Gruppi 2019/20</h2>
                <fieldset id="Oggi">
                    <fieldset id="Catechismi">
                        <p><input type="checkbox" id="Ccat2" name = "list[]" value="Ccat2" onclick="check(id,'cat2')">Catechismo di <u>seconda</u> elementare. Ruolo <select id="cat2" name="Scat2" disabled="disabled"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Ccat3" name = "list[]" value="Ccat3" onclick="check(id,'cat3')">Catechismo di <u>terza</u> elementare. Ruolo <select id="cat3" name="Scat3"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Ccat4" name = "list[]" value="Ccat4" onclick="check(id,'cat4')">Catechismo di <u>quarta</u> elementare. Ruolo <select id="cat4" name="Scat4"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Ccat5" name = "list[]" value="Ccat5" onclick="check(id,'cat5')">Catechismo di <u>quinta</u> elementare. Ruolo <select id="cat5" name="Scat5"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Cmed" name = "list[]" value="Cmed" onclick="check(id,'medie')">Gruppo Medie. Ruolo <select id="medie" name="Smedie"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="CcatS1" name = "list[]" value="CcatS1" onclick="check(id,'catS1')">Catechismo di <u>prima</u> superiore. Ruolo <select id="catS1" name="ScatS1"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="CcatS2" name = "list[]" value="CcatS2" onclick="check(id,'catS2')">Catechismo di <u>seconda</u> superiore. Ruolo <select id="catS2" name="ScatS2"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                    </fieldset>
                    <fieldset id="NonCatechismi">
                        <p><input type="checkbox" id="Cora" name = "list[]" value="Cora" onclick="check(id,'ora')">Oratorio delle elementari. Ruolo <select id="ora" name="Sora"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Cgiovanis" name = "list[]" value="Cgiovanis" onclick="check(id,'giovanis')">Gruppo Giovanissimi. Ruolo <select id="giovanis" name="Sgiovanis"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p><br>
                        <p><input type="checkbox" id="Cgre" name = "list[]" value="Cgre" onclick="check(id,'gre')">Gruppo GREST. Ruolo <select id="gre" name="Sgre"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                        <p><input type="checkbox" id="Cgio" name = "list[]" value="Cgio">Gruppo Giovani</p>
                        <p><input type="checkbox" id="Cpre" name = "list[]" value="Cpre">Gruppo Presepe vivente</p>
                        <img id="imgGruppiOggi" src="./../css/Immagini/Icone/gruppo.png" alt="imgGruppiOggi">
                    </fieldset>
                </fieldset>
			</div>
			<div id="gruppiIeri">
                <h2 class="titoliGruppi">Ex gruppi (si prega di specificare l'anno)</h2>
                <fieldset id="Altro">
                    <p><input type="checkbox" id="XCcat" name = "list[]" value="XCcat" onclick="check3(id,'XTcat','XScat')">Catechismo.<br> Anno di partecipazione: <input type="number" id="XTcat" name="XTcat" value="2018" min="1971" max="2018"> Ruolo <select id="XScat" name="XScat"><option value="Catechista">Catechista</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                    <p><input type="checkbox" id="XCora" name = "list[]" value="XCora" onclick="check3(id,'XTora','XSora')">Oratorio.<br> Anno di partecipazione: <input type="number" id="XTora" name="XTora" value="2018" min="1971" max="2018"> Ruolo <select id="XSora" name="XSora"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                    <p><input type="checkbox" id="XCgiovanis" name = "list[]" value="XCgiovanis" onclick="check3(id,'XTgiovanis','XSgiovanis')">Gruppo Giovanissimi.<br> Anno di partecipazione: <input type="number" id="XTgiovanis" name="XTgiovanis" value="2018" min="1971" max="2018"> Ruolo <select id="XSgiovanis" name="XSgiovanis"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                    <p><input type="checkbox" id="XCgre" name = "list[]" value="XCgre" onclick="check3(id,'XTgre','XSgre')">Gruppo GREST.<br> Anno di partecipazione: <input type="number" id="XTgre" name="XTgre" value="2018" min="1971" max="2018"> Ruolo <select id="XSgre" name="XSgre"><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option></select></p>
                    <p><input type="checkbox" id="XCgio" name = "list[]" value="XCgio" onclick="check(id,'XTgio')">Gruppo Giovani.<br> Anno di partecipazione: <input type="number" id="XTgio" name="XTgio" value="2018" min="1971" max="2018"></p>
                    <p><input type="checkbox" id="XCfam" name = "list[]" value="XCfam" onclick="check(id,'XTfam')">Gruppo Famiglia.<br> Anno di partecipazione: <input type="number" id="XTfam" name="XTfam" value="2015" min="1971" max="2015"></p>
                    <p><input type="checkbox" id="XCcor" name = "list[]" value="XCcor" onclick="check(id,'XTcor')">Gruppo Coro.<br> Anno di partecipazione: <input type="number" id="XTcor" name="XTcor" value="2018" min="1971" max="2018"></p>
                    <p><input type="checkbox" id="XCalt" name = "list[]" value="XCalt" onclick="check4(id,'XTalt','XTextAlt','XSalt')">Altro: <br><input type="text" id="XTextAlt" name="XTextAlt" placeholder="Gruppo x"><input type="number" id="XTalt" name="XTalt" value="2018" min="1971" max="2018"> Ruolo <select id="XSalt" name="XSalt"><option value="Catechista">Catechista</option><option value="Animatore">Animatore</option><option value="Partecipante">Partecipante</option><option value="Genitore">Genitore</option><option value="NessunRuolo">Nessun ruolo</option> </select></p>
                    <img id="imgGruppiIeri" src="./../css/Immagini/Icone/gruppoOld.png" alt="imgGruppiOggiOld">
                </fieldset>
		    </div>
            <div id="divReg">
            <p id="textReg">Per confermare la registrazione, premi sul pulsante!</p>	
            <input id="Nreg" type="submit" value="Sono un Badiese!">
            </div>
        </form>
        <?php
            require_once "./gestioneDB/DBmanager.php";
            $nome = filter_input(INPUT_POST,'nome');
            $cognome = filter_input(INPUT_POST,'cognome');
            $data = filter_input(INPUT_POST,'data');
            $sesso = filter_input(INPUT_POST,'sesso');

            $mail = filter_input(INPUT_POST,'mail');
            $username = filter_input(INPUT_POST,'user');
            $password = filter_input(INPUT_POST,'pass');

            $note = "No admin";
            $controllo = 0;

            $gruppiSelezionati = array();
            $selectSelezionate = array();
            $textSelezionati = array();
            $anniSelezionati = array();
            $ruoliSelezionati = array();

            $i = 0;

            if(!empty($_POST['list'])) {
                foreach($_POST['list'] as $selected){
                    if($i == 5){
                        echo "<script>\n";
                        echo "alert('Non puoi selezionare più di 5 gruppi! Dai la precedenza ai gruppi correnti')\n";
                        echo "</script>";
                        return;
                    }
                    $gruppiSelezionati[$i] = $selected;
                    switch ($selected){
                        //Gruppi correnti
                        case "Ccat2":
                            $selectSelezionate[$i] = "Scat2";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Ccat3":
                            $selectSelezionate[$i] = "Scat3";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Ccat4":
                            $selectSelezionate[$i] = "Scat4";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Ccat5":
                            $selectSelezionate[$i] = "Scat5";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "CcatS1":
                            $selectSelezionate[$i] = "ScatS1";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "CcatS2":
                            $selectSelezionate[$i] = "ScatS2";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Cora":
                            $selectSelezionate[$i] = "Sora";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Cmed":
                            $selectSelezionate[$i] = "Smedie";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Cgiovanis":
                            $selectSelezionate[$i] = "Sgiovanis";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Cgre":
                            $selectSelezionate[$i] = "Sgre";
                            $textSelezionati[$i] = "NULL";
                            break;
                        case "Cpre":
                        case "Cgio":
                            $selectSelezionate[$i] = "NULL";
                            $textSelezionati[$i] = "NULL";
                            break;
                        
                        //Gruppi vecchi
                        case "XCcat":
                            $selectSelezionate[$i] = "XScat";
                            $textSelezionati[$i] = "XTcat";
                            break;
                        case "XCora":
                            $selectSelezionate[$i] = "XSora";
                            $textSelezionati[$i] = "XTora";
                            break;
                        case "XCgiovanis":
                            $selectSelezionate[$i] = "XSgiovanis";
                            $textSelezionati[$i] = "XTgiovanis";
                            break;
                        case "XCgre":
                            $selectSelezionate[$i] = "XSgre";
                            $textSelezionati[$i] = "XTgre";
                            break;
                        case "XCgio":
                            $selectSelezionate[$i] = "NULL";
                            $textSelezionati[$i] = "XTgio";
                            break;
                        case "XCfam":
                            $selectSelezionate[$i] = "NULL";
                            $textSelezionati[$i] = "XTfam";
                            break;
                        case "XCcor":
                            $selectSelezionate[$i] = "NULL";
                            $textSelezionati[$i] = "XTcor";
                            break;
                        case "XCalt":
                            $gruppoAltro = filter_input(INPUT_POST,'XTextAlt');
                            $selectSelezionate[$i] = "XSalt";
                            $textSelezionati[$i] = "XTalt";
                            break;
                    }
                    if($selectSelezionate[$i] == "NULL")
                        $ruoliSelezionati[$i] = "Inesistente";
                    else
                        $ruoliSelezionati[$i] = $_POST[$selectSelezionate[$i]];

                    if($textSelezionati[$i] == "NULL")
                        $anniSelezionati[$i] = 2019;
                    else
                        $anniSelezionati[$i] = $_POST[$textSelezionati[$i]];
                    $i++;
                }
            }

        if(!empty($username)) {
            if (strtotime($data)>time()){
                echo "<script>\n";
                echo "alert('Inserisci una data di nascita vera')\n";
                echo "</script>";
                return;
            }
            if(empty($_POST['list'])){
                echo "<script>\n";
                echo "alert('Devi selezionare almeno un gruppo')\n";
                echo "</script>";
                return;
            }
            else{
                global $UserDb;
                $verificaUsername = "SELECT Username FROM Utente WHERE Username = '$username'";
                $resultVerificaUsername = $UserDb->performQuery($verificaUsername);
                if(mysqli_num_rows($resultVerificaUsername)>0){
                    echo "<script>\n";
                    echo "alert('Username già presente! Sceglierne un altro.')\n";
                    echo "</script>";
                }
                else{
                    $insDati = "INSERT INTO Utente
                                VALUES(DEFAULT ,'$username',md5('$password'),'$nome','$cognome','$data','$mail','$sesso','$controllo','$note');";
                    $UserDb->performQuery($insDati);

                    for ($i = 0; $i < count($gruppiSelezionati); $i++) {
                        $cod = $gruppiSelezionati[$i];
                        if($cod == "XCalt"){
                            $verificaSeGruppoAltroGiaPresente = "SELECT Nome FROM Attivita WHERE Nome='$gruppoAltro'";
                            $esitoScorsaRichiesta = $UserDb->performQuery($verificaSeGruppoAltroGiaPresente);
                            //Verifico se il gruppo vecchio altro è già presente o meno
                            if(mysqli_num_rows($resultVerificaUsername)==0){
                                //Se no lo aggiungo alle attività
                                $inserisciAttivita = "INSERT INTO Attivita VALUES('$gruppoAltro','XCaltNuovo')";
                                $resultInserisciAttivita = $UserDb->performQuery($inserisciAttivita);
                                $gruppo = $gruppoAltro;
                            }
                            //Se si associo solo il gruppo a quello previsto
                            else
                                $gruppo = $gruppoAltro;
                        }
                        else{
                            $recuperaGruppo = "SELECT Nome FROM Attivita WHERE Cod = '$cod'";
                            $result = $UserDb->performQuery($recuperaGruppo);
                            while ($row = $result->fetch_assoc()) {
                                $gruppo = $row['Nome'];
                            }
                        }
                        $ruolo = $ruoliSelezionati[$i];
                        $anno = $anniSelezionati[$i];

                        $insertGruppo = "INSERT INTO Svolge
                                        VALUES ('$username','$gruppo','$ruolo','$anno');";
                        $resultInsert = $UserDb->performQuery($insertGruppo);
                        echo "<script>\n";
                        echo "window.alert('Registazione avvenuta con successo! A breve ti arriver&#224 una mail che ti avviser&#224 che potrai accedere al sito come Badiese!');\n";
                        echo "location.href='./../index.php';\n";
                        echo "</script>";
                    }
                }
            }
        }
        ?>
    </div>
</body>
</html>
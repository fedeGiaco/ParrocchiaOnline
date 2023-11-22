<?php
require_once "./gestioneDB/DBmanager.php";
require_once "./home.php";
global $UserDb;

$idInteressato = $_POST['idPo'];
$gruppoInteressato = $_POST['idGruppo'];
$textAreaInteressata = "commento".strval($idInteressato);
$testoCommento = $_POST[$textAreaInteressata];
if($testoCommento==""){
    echo "<script>\n";
    echo "window.alert('Inserisci del testo per commentare');\n";
    echo "window.location.href = './../index.php';\n";
    echo "</script>";
    return;
}
$inserisciCommento = "
    INSERT INTO PostCommenti
    SET 
        IDPost = '$idInteressato',
        Proprietario = '$persona',
        Testo = '$testoCommento',
        Immissione=CURRENT_TIMESTAMP;
";
$UserDb->performQuery($inserisciCommento);
echo "<script>\n";
echo "window.alert('Hai commentanto il post!');\n";
if($gruppoInteressato == 'all')
    echo "window.location.href = './home.php';\n";
if($gruppoInteressato == 'Gruppo Giovani')
    echo "window.location.href = './gruppi/gruppoGiovani.php';\n";
if($gruppoInteressato == 'Gruppo Medie')
    echo "window.location.href = './gruppi/gruppoMedie.php';\n";
echo "</script>";
?>
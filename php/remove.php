<?php
require_once "./gestioneDB/DBmanager.php";
require_once "./home.php";
global $UserDb;

$idInteressato = $_POST['idPo'];
$gruppoInteressato = $_POST['idGruppo'];
$queryDistruttiva = "
    DELETE P.*
    FROM PostUtenti P
    WHERE ID = '$idInteressato'
";
$UserDb->performQuery($queryDistruttiva);
echo "<script>\n";
echo "window.alert('ATTENZIONE: hai eliminato il post!');\n";
if($gruppoInteressato == 'all')
    echo "window.location.href = './home.php';\n";
if($gruppoInteressato == 'Gruppo Giovani')
    echo "window.location.href = './gruppi/gruppoGiovani.php';\n";
if($gruppoInteressato == 'Gruppo Medie')
    echo "window.location.href = './gruppi/gruppoMedie.php';\n";
echo "</script>";
?>
<?php 
require_once "./gestioneDB/DBmanager.php";
global $UserDb;

$query = 'SELECT Nome,Tipo,Dati FROM tabellaFile WHERE ID = '.$_GET['id'];
$result = $UserDb->performQuery($query);
$row = mysqli_fetch_array($result);

$type = $row['Tipo'];
$image = $row['Dati'];

header("Content-Type:  ".$type);
echo $image;
?>
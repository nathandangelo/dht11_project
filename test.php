<?php 

include "dao/Mesuredao.php";
$config = include "inc/config.inc.php";
include "Classes/Measure.php";

$newmesure = new Measure(65,69);
$daotest = new Mesuredao($config);

$daotest->createMesure($newmesure);

//$result = $daotest->readmesurebyid(4);
//var_dump($result);

//$result = $daotest->deletemesure(5);

//$daotest->updatemesure($newmesure,7);
?>
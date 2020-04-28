<?php 
include 'src/Prado.php';
include 'src/Bmw.php';
use App\Prado;
use App\Bmw;

$t = new Prado();
$t->getData();
echo Bmw::$model;

?>
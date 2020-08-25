<?php

//BASE DE DONNEES

//----------------------------------------------------------------------
require_once '../application/class/Connexion.php';
$base = new Connexion();


$req = $base->q("SELECT * FROM `category`");
dump($req[0]);
echo json_encode($req)
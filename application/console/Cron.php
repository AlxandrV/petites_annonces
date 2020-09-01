<?php
require_once '../vendor/autoload.php';
use App\Connexion;


$today = date("Y-m-d");
$limit_validation = date('Y-m-d', strtotime($today. ' - 1 days'));
$limit_existence = date('Y-m-d', strtotime($today. ' - 15 days'));

$base = new Connexion();

$base->qw('DELETE FROM post WHERE  is_validated = 0 AND date_creation = :limit_validation',
    array(array('limit_validation',$limit_validation,\PDO::PARAM_STR)));

$base->qw('DELETE FROM post WHERE  is_validated = 1 AND date_validation = :limit_existence',
    array(array('limit_existence',$limit_existence,\PDO::PARAM_STR)));



<?php
use Respect\Validation\Validator as v;

$title = $_POST['title'];
if(v::stringVal()->validate($title) == false){
    return json_encode('Titre invalide');
}
$description = $_POST['description'];
if(v::stringVal()->validate($description) == false){
    return json_encode('Déscription invalide');
}
$user_mail  = $_POST['user_mail'];
if(v::stringVal()->validate($user_mail ) == false){
    return json_encode('Adresse mail invalide');
}
$user_name  = $_POST['user_name'];
if(v::stringVal()->validate($user_name ) == false){
    return json_encode('Nom invalide');
}
$user_firstname  = $_POST['user_firstname'];
if(v::stringVal()->validate($user_firstname ) == false){
    return json_encode('Prénom invalide');
}

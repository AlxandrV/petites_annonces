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
$picture = $_POST['picture'];
if(v::stringVal()->validate($picture) == false){
    return json_encode('Déscription invalide');
}


$reference_produit = $_POST['reference'];
if(v::intVal()->positive()->max(99999999999999999999)->validate($reference_produit) == false){
    return json_encode('Référence invalide');
}
$prix_produit = $_POST['prix'];
if(v::number()->max(9999999999)->validate($prix_produit) == false){
    return json_encode('Prix invalide');
}
$date_achat_produit = $_POST['date_achat'];
if(v::date()->validate($date_achat_produit) == false){
    return json_encode('Date d\'achat invalide');
}
$date_garantie_produit = $_POST['date_garantie'];
if(v::date()->validate($date_achat_produit) == false){
    return json_encode('Date de fin de garantie invalide');
}
if($date_achat_produit > $date_garantie_produit){
    return json_encode('La date d\'achat ne peut pas être supérieur à la date de fin de garantie');
}
$conseil_produit = $_POST['conseil'];
if(v::stringVal()->validate($conseil_produit) == false){
    return json_encode('Conseil d\'utlisation invalide');
}

$manuel_utilisation_produit = $_POST['manuel'];
if(v::stringVal()->validate($manuel_utilisation_produit) == false){
    return json_encode('Url manuel invalide');
}
$ticket_achat_produit = $_POST['ticket'];
if(v::stringVal()->validate($ticket_achat_produit) == false){
    return json_encode('Url ticket achat invalide');
}
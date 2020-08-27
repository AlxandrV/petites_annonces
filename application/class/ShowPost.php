<?php
namespace App;

class ShowPost
{
    public $data=[];

    function __construct($unique_id) {
        $base = new Connexion();

        $req = $base->q(
            "SELECT
                p.title,
                p.description,
                p.picture,
                p.date_creation,
                p.user_mail,
                p.user_name,
                p.user_firstname,
                p.user_phone,
                p.category_id,
                cat.name as category_name
            FROM post as p
            INNER JOIN category cat ON p.category_id = cat.ID
            WHERE p.unique_id LIKE :unique_id",
            array(array('unique_id',$unique_id,\PDO::PARAM_STR)));
        $this->data = $req;
    }

    public static function Exists($unique_id){

        //Connexion
        $base = new Connexion();

        //Test if unique_id exists
        $req = $base->q("SELECT `unique_id` FROM `post` WHERE `unique_id` = :unique_id",
            array(array('unique_id',$unique_id,\PDO::PARAM_STR)));

        $slug = $req[0]->unique_id;

        if($slug === $unique_id){
            return true;
        }
        return false;
    }
}
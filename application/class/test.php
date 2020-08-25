<?php
namespace App;

class Test
{
    public $user;

    public function hello(){
        return 'hello world';
    }

    function __construct() {
        $this->user='John Doe';
        return $this->user;
        // // Alexandre
        // // try{
        // //     $bdd = new PDO('mysql:host=localhost;dbname=projet_annonces;charset=utf8', 'root', 'root',
        // //     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // // }

        // // Jeremy
        // try{
        //     $bdd = new PDO('mysql:host=localhost;dbname=projet_annonces;charset=utf8', 'root', '',
        //     array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        // }

        // catch (Exeption $e){
        //     die('Erreur : ' . $e -> getmessage());
        // }
    }
}
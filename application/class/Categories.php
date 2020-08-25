<?php
namespace App;

class Categories
{
    public $data=[];

    function __construct() {
        $base = new Connexion();

        $req = $base->q("SELECT * FROM `category`");
        $this->data = $req;
    }
}
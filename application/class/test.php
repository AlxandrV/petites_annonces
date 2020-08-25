<?php
namespace App;

class Test
{
    public $user;
    // déclaration du constructeur
    function __construct() {
        $this->user = 'John Doe';
    }
    public function hello(){
        echo 'hello world!!';
    }
}
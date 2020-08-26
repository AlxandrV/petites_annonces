<?php

use App\Connexion;
use App\Twig;

$base = new Connexion();

$search = "%%";
if(isset($_POST['search'])){
    $search = "%" . $_POST['search'] . "%";
}
$pageStart = 0;
if(isset($_POST['pageStart'])){
    $pageStart = $_POST['pageStart'];
}
$maxPosts = 10;
if(isset($_POST['maxPosts'])){
    $maxPosts = $_POST['maxPosts'];
}

$req = $base->q(
    "SELECT
                    p.id,
                    p.unique_id,
                    p.title,
                    p.description,
                    p.picture,
                    p.is_validated,
                    p.date_creation,
                    p.date_validation,
                    p.user_mail,
                    p.user_name,
                    p.user_firstname,
                    p.user_phone,
                    p.category_id,
                    cat.name as category_name
                FROM post as p
                INNER JOIN category cat ON p.category_id = cat.ID
                WHERE p.title LIKE :search
                ORDER BY p.date_creation
                LIMIT :maxPosts OFFSET :pageStart",
    array(
        array('search',$search,PDO::PARAM_STR),
        array('pageStart',$pageStart,PDO::PARAM_INT),
        array('maxPosts',$maxPosts,PDO::PARAM_INT)
        )
    );

    //render template
    $twig = new Twig('posts.html.twig');
    $twig->render([
            'posts' => $req,
        ]);
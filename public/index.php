<?php
require_once '../vendor/autoload.php';

use App\Categories;
use App\Twig;




//ROUTEUR
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->setBasePath('');

//Home Page __________________________________
$router->map('GET', '/', function () {

    //categories request
    $categories = new Categories();

    //render template
    $twig = new Twig('base.html.twig');
    $twig->render([
            'categories' => $categories->data,
        ]);
});


//Posts Pages __________________________________
$router->map('GET', '/post-[*:slug]-[i:id]', function ($slug, $id) {
    echo "Visualisation de l'annonce: $slug qui a l'index: $id";
});

//Validate Pages __________________________________
$router->map('GET', '/valid-[*:slug]-[i:id]', function ($slug, $id) {
    echo "Edition de l'annonce: $slug qui a l'index: $id";
});

//Edit Pages __________________________________
$router->map('GET', '/edit-[*:slug]-[i:id]', function ($slug, $id) {
    echo "Edition de l'annonce: $slug qui a l'index: $id";
});

//Delete Pages __________________________________
$router->map('GET', '/del-[*:slug]-[i:id]', function ($slug, $id) {
    echo "Suppression de l'annonce: $slug qui a l'index: $id";
});

//DEBUG PAGE_________________________________________
$router->map('GET', '/debug', function () {
    // $categories = new Categories();

    // $twig = new Twig('debug.html.twig');

    // $twig->render([
    //         'categories' => $categories->data,
    //     ]);
    require_once '../application/class/PostList.php';
});
//___________________________________________________

//AJAX PostList_________________________________________
$router->map('POST', '/ajax-postList', function(){
    \App\PostList::postList();
});
//404 Page __________________________________
$router->map('GET', '/[*]', function () {
    echo "cette page n'existe pas";
});




$match = $router->match();

if ($match !== null) {
    call_user_func_array($match['target'], $match['params']);
}
<?php
require_once '../vendor/autoload.php';

use App\Categories;
use App\Twig;




//ROUTEUR
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->setBasePath('');

$router->map('GET', '/', function () {
    $loader = new \Twig\Loader\FilesystemLoader('../application/templates');
    $twig = new \Twig\Environment($loader, [
        'cache' => '../application/cache',
        'debug' => true,
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());

    $template = $twig->load('base.html.twig');


    echo $template->render([]);
});

$router->map('GET', '/post-[*:slug]-[i:id]', function ($slug, $id) {
    echo "je suis sur l'annonce: $slug qui a l'index: $id";
});

$router->map('GET', '/[*]', function () {
    echo "cette page n'existe pas";
});

//DEBUG PAGE_________________________________________
$router->map('GET', '/debug', function () {
    $categories = new Categories();

    $twig = new Twig('debug.html.twig');

    $twig->render([
            'categories' => $categories->data,
        ]);
});
//___________________________________________________

$match = $router->match();

if ($match !== null) {
    call_user_func_array($match['target'], $match['params']);
}
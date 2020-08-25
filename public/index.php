<?php
require_once '../vendor/autoload.php';

use App\Categories;
use App\Test;




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


    $test= new test();

    echo $template->render([
        'user' => $test->user,
        'hello' => $test->hello(),
    ]);
});



//DEBUG PAGE_________________________________________
$router->map('GET', '/debug', function () {

    $test = new Categories();
    dump($test->data[0]->name);

});
//___________________________________________________


$router->map('GET', '/post-[*:slug]-[i:id]', function ($slug, $id) {
    echo "je suis sur l'annonce: $slug qui a l'index: $id";
});

$router->map('GET', '/[*]', function () {
    echo "cette page n'existe pas";
});

$match = $router->match();
if ($match !== null) {
    call_user_func_array($match['target'], $match['params']);
}
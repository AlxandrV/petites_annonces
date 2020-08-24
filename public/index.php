<?php

require_once '../vendor/autoload.php';

$router = new AltoRouter();

//Routeur
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->setBasePath('../public');

$router->map('GET', '/', function(){
    echo "page d'accueil";
});

$router->map('GET', '/contact', function(){
    echo "page de contact";
});
$router->map('GET', '/post-[*:slug]-[i:id]', function($slug, $id){
    echo "je suis sur l'annonce: $slug qui a l'index: $id";
});
$match = $router->match();
if ($match !== null){
    call_user_func_array($match['target'], $match['params']);
}

dump($router);
dump($match);

//Twig
// $loader = new \Twig\Loader\FilesystemLoader('../application/templates');
// $twig = new \Twig\Environment($loader, [

//     'cache' => '../application/cache',
//     'debug' => true,
//     ]);
//     $twig->addExtension(new \Twig\Extension\DebugExtension());

// $template = $twig->load('base.html.twig');
// echo $template->render(array(
//     'user' => $user,
//     'exemple' => exemple(),
// ));

// dump($_SERVER);
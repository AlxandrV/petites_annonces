<?php
require_once '../vendor/autoload.php';
<<<<<<< HEAD
$loader = new \Twig\Loader\FilesystemLoader('../application/templates');
$twig = new \Twig\Environment($loader, [

    'cache' => '../application/cache',
    'debug' => true,
    ]);
    $twig->addExtension(new \Twig\Extension\DebugExtension());

$template = $twig->load('base.html.twig');
echo $template->render(array(
    'user' => 'user',
    // 'exemple' => exemple(),
));
// dump($_SERVER);
=======
use App\Test;

//Routeur
$uri = $_SERVER['REQUEST_URI'];
$router = new AltoRouter();
$router->setBasePath('../public');

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




$router->map('GET', '/contact', function () {
    echo 'page de contact';
});
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
>>>>>>> 3237c38a895fda20feadfed2670a29e1f2041499

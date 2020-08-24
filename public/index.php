<?php
require_once '../vendor/autoload.php';
// $loader = new \Twig\Loader\FilesystemLoader('../application/templates');
// $twig = new \Twig\Environment($loader, [

//     'cache' => '../application/cache',
//     'debug' => true,
//     ]);
//     $twig->addExtension(new \Twig\Extension\DebugExtension());

<<<<<<< HEAD
$template = $twig->load('base.html.twig');
echo $template->render(array(
    'user' => '$user',
    // 'exemple' => exemple(),
));
=======
// $template = $twig->load('base.html.twig');
// echo $template->render(array(
//     'user' => $user,
//     'exemple' => exemple(),
// ));
dump($_SERVER);
>>>>>>> 86275453ab72a70280b574038bfb6db40dcf65cc

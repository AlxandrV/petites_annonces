<?php
require_once '../vendor/autoload.php';

use App\Categories;
use App\ShowPost;
use App\Twig;

//ROUTER
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

//Validate Pages __________________________________
$router->map('GET', '/valid-[:unique_id]', function ($unique_id) {
    $showPost = new ShowPost($unique_id);
    //render template
    $twig = new Twig('debug.html.twig');
    $twig->render([
            'post' => $showPost->data[0],
        ]);
});

//Edit Pages __________________________________
$router->map('GET', '/edit-[:unique_id]', function ($unique_id) {
    $showPost = new ShowPost($unique_id);
    //render template
    $twig = new Twig('debug.html.twig');
    $twig->render([
            'post' => $showPost->data[0],
        ]);
});

//Delete Pages __________________________________
$router->map('GET', '/del-[:unique_id]', function ($unique_id) {
    $showPost = new ShowPost($unique_id);
    //render template
    $twig = new Twig('debug.html.twig');
    $twig->render([
            'post' => $showPost->data[0],
        ]);
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
//AJAX Post Add_________________________________________
$router->map('POST', '/ajax-post-add', function(){
    \App\Post::Add();
});
//AJAX Post Update_________________________________________
$router->map('POST', '/ajax-post-update', function(){
    \App\Post::Update();
});
//AJAX Post Delete_________________________________________
$router->map('POST', '/ajax-post-delete', function(){
    \App\Post::Delete();
});
//AJAX Post Show_________________________________________
$router->map('GET', '/ajax-post-show', function(){
    \App\Post::ShowPost();
});
//404 Page __________________________________
$router->map('GET', '/[*]', function () {
    echo "cette page n'existe pas";
});



// Launch Routing
$match = $router->match();

if ($match !== null) {
    call_user_func_array($match['target'], $match['params']);
}
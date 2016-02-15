<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Queen.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/view_attack", function() use($app) {
        $my_Queen = new Queen;
        $check_attack = $my_Queen->canAttack($_GET['queenx'], $_GET['queeny'], $_GET['kingx'], $_GET['kingy']);
        return $app['twig']->render('queen_attacked.html.twig', array('result' => $check_attack));
    });

    return $app;
?>

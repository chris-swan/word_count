<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/count.php";
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'
    ));

    $app->get ("/", function() use ($app){
        return $app['twig']->render('count.html.twig');
    });

    $app->get("/count", function() use ($app) {
          $count = new Count;
          $matching_word = $count->CountWord($_GET['phrase'], $_GET['word']);
          return $app['twig']->render('word_counted.html.twig', array('result'=> $matching_word));

    });

    return $app;
?>

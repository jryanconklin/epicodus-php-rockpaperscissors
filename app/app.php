<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RockPaperScissors.php";

    $app = new Silex\Application();
    $app['debug'] = true;
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'));
    session_start();
    if (empty($_SESSION['result'])) {
        $_SESSION['result'] = array();
    }

    $app->get('/', function() use ($app) {
       return $app['twig']->render('home.html.twig', array ('result' => $_SESSION['result']));
    });

    $app->post('/play', function() use ($app) {
        $newRockPaperScissors = new RockPaperScissors();
        $playAGame =  $newRockPaperScissors->playGame($_POST['player_one'], $_POST['player_two']);
        $_SESSION['result'] = $playAGame;
        return $app->redirect('/');
    });

    $app->post('/computer', function() use ($app) {
        $newRockPaperScissors = new RockPaperScissors();
        $computer = $newRockPaperScissors->playComputer();
        $playAGame =  $newRockPaperScissors->playGame($_POST['player_one'], $computer);
        $_SESSION['result'] = $playAGame;
        return $app->redirect('/');
    });


    return $app;

?>

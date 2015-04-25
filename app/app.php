<?php
    require_once __DIR__ .'/../vendor/autoload.php';
    require_once __DIR__ .'/../src/Game.php';
    require_once __DIR__ .'/../src/GameSingle.php';


    session_start();




    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));




    $app->get('/', function() use ($app) {
            return $app['twig']->render("home.twig");

    });

    $app->post('/singlePlayer', function() use ($app) {
            return $app['twig']->render("singlePlayer.twig");

    });
    $app->post('/singleplay', function() use ($app) {

             $person_move= strtolower($_POST['input1']);

             $array=array("rock","paper","scissors");

        if((in_array($person_move, $array)))
        {
             $new_Game = new GameSingle;
             $computor_move= $new_Game->PlayRandom();
             $GameResult = $new_Game->PlayGame($person_move,$computor_move );

            return $app['twig']->render("singleplay.twig", array("result" =>$GameResult, "computer"=> $computor_move,"you"=> $person_move));
        }
        else{
            return $app['twig']->render("error.twig");

        }

    });

    $app->post('/TwoPlayer', function() use ($app) {


            return $app['twig']->render("twoplayers.twig");

    });



    $app->post('/player2', function() use ($app) {

            $person1_move = strtolower($_POST['input1']);

            $array=array("rock","paper","scissors");
            if((in_array($person1_move,$array)))
            {
            //$_SESSION['player1'] = $person1_move ;
            $_SESSION['player1']=$person1_move;

            return $app['twig']->render("secondPlayer.twig");

        }
        else{
            return $app['twig']->render("error.twig");

        }



    });



    $app->post('/TwoPlayerResult', function() use ($app) {

             $person2_move= strtolower($_POST['input2']);

             $array=array("rock","paper","scissors");

             if((in_array($person2_move,$array)))
             {

             $new_Game = new Game;
             $GameResult = $new_Game->PlayGame($_SESSION['player1'],$person2_move );


            return $app['twig']->render("twoplayer.twig", array("result" =>$GameResult, "player1"=> $_SESSION['player1'], "player2"=> $person2_move));
          }
          else{
              return $app['twig']->render("error.twig");

          }

    });


    return $app;
?>

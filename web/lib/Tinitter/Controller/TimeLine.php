<?php
namespace Tinitter\Controller;

class TimeLine
{
    public function show ()
    {
        //echo "hello world from webeng!";
        $app = \Slim\Slim::getInstance();
        $app->render('index.twig', ['display_text' => "Hello, world! from to"]);
    }
}
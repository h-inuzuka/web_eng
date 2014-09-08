<?php
namespace Tinitter\Controller;

class TimeLine
{
    public function show ()
    {
        //echo "hello world from webeng!";
        $app = \Slim\Slim::getInstance();
        $app->render('TimeLine/show.twig');
        //$app->render('index.twig', ['display_text' => "Hello, world! from to"]);
        /*
        $post = new \Tinitter\Model\Post();
        $post->nickname = 'ニックネーム';
        $post->body = '本文';
        $post->save();
        $same_post = \Tinitter\Model\Post::find(1);
        */
    }
}
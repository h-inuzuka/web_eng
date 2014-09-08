<?php
namespace Tinitter;

class Route
{
    public static function registration(\Slim\Slim $app)
    {
        $app->get('/', '\Tinitter\Controller\TimeLine:show');
        $app->get('/page/:page_num', '\Tinitter\Controller\TimeLine:show');
        $app->post('/post/commit', '\Tinitter\Controller\Post:commit');
    }
}
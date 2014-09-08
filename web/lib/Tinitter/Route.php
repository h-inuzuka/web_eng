<?php
namespace Tinitter;

class Route
{
    public static function registration(\Slim\Slim $app)
    {
        $app->get('/', '\Tinitter\Controller\TimeLine:show');
        $app->get('/hoge', '\Tinitter\Controller\TimeLine:show');
        $app->post('/post/commit', '\Tinitter\Controller\Post:commit');
        //$app->post('/post/commit', function(){echo "hoge";});
        $app->post('/post/hoge', '\Tinitter\Controller\TimeLine:show');
        //$app->post('/', function(){echo "hoge";});
    }
}
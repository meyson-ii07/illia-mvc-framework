<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
    $config = [
        'db' => [
            'dsn' => $_ENV['DB_DSN'],
            'user' => $_ENV['DB_USER'],
            'password' => $_ENV['DB_PASSWORD'],
        ],
    ];
    $isDebug = $_ENV['APP_ENV'] == 'debug';

    if ($isDebug) {
        $twigConf = [
                'debug' => true,
                'cache' => false,
                'auto_reload' => true,
            ];
    } else {
        $twigConf = [
            'debug' => false,
            'cache' => '../var/cache',
            'auto_reload' => true,
        ];
    }

    try {
        $loader = new FilesystemLoader('../views');
        $twig = new Environment($loader, $twigConf);


        $app = new Application(dirname(__DIR__), $config);
        $app->session->setCsrfToken();
        $app->router->loadRoutes();
        $app->twig = $twig;
        $app->run();
    }
    catch (Exception $e) {
        if ($isDebug) {
            dd($e->getTraceAsString()."\n".$e->getMessage());
        } else {
            $twig->render('404_.html.twig');
        }
    }

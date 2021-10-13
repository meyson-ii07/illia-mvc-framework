<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
    $loader = new FilesystemLoader('../views');
    $twig = new Environment($loader, [
        'cache' => '../var/cache',
    ]);

    $config = [
      'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASSWORD'],
      ],
    ];

    $app = new Application(dirname(__DIR__), $config);
    $app->session->setCsrfToken();
    $app->router->loadRoutes();
    $app->twig = $twig;
    $app->run();
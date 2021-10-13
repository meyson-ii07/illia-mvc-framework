<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\core\Application;

  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  $dotenv->load();

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
  $app->run();
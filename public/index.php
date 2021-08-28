<?php
require_once __DIR__.'/../vendor/autoload.php';

use app\controllers\SiteController;
use app\core\Application;
use app\core\Services\YamlParser;

  $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
  $dotenv->load();

//  $config = [
//      'db' => [
//        'dsn' => $_ENV['DB_DSN'],
//        'user' => $_ENV['DB_USER'],
//        'password' => $_ENV['DB_PASSWORD'],
//      ],
//  ];
//
  $app = new Application(dirname(__DIR__), $config);
//
//  //TODO: csrf protection
//  $app->session->setCsrfToken();
//
//  //TODO: make routes file
//  $app->router->get('/', [SiteController::class, 'list']);
//  $app->router->post('/', [SiteController::class, 'list']);
//  $app->router->get('/update', [SiteController::class, 'update']);
//  $app->router->post('/update', [SiteController::class, 'update']);
//  $app->router->get('/save', [SiteController::class, 'save']);
//  $app->router->post('/save', [SiteController::class, 'save']);
//  $app->router->get('/delete', [SiteController::class, 'delete']);
//
//  $app->run();
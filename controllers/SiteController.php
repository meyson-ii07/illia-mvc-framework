<?php

namespace app\controllers;

use app\core\Application;

class SiteController
{

    public function home()
    {
        return Application::$app->router->renderView('allo');
    }

}
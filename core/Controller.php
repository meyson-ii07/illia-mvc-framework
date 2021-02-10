<?php

namespace app\core;

class Controller
{
    /**
     * Renders requested view
     * @param $view
     * @param $params
     * @return string|string[]
     */
    protected function render($view, $params)
    {
       return Application::$app->router->renderView($view, $params);
    }

    /**
     * Redirects to requested rout
     * @param $rout
     */
    protected function redirect($rout)
    {
        $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
        header("Location: $link/$rout");
        exit();
    }
}
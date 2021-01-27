<?php

namespace app\core;

class Router
{
    protected array $routes = [];
    public Request $request;
    public Response $response;

    /**
     * Router constructor.
     * @param Request $request
     * @param Response $response
     */
    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    /**
     * @param $path
     * @param $callback
     */
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    /**
     * @return string|string[]
     */
    public function resolve()
    {
       $path = $this->request->getPath();
       $method = $this->request->getMethod();
       $callback = $this->routes[$method][$path] ?? false;
       if (!$callback) {
           Application::$app->response->setStatusCode(404);
           return '404 not found';
       }
       if (is_string($callback)) {
           return $this->renderView($callback);
       }
       call_user_func($callback);
    }

    /**
     * Renders view
     * @param string $callback
     * @return string|string[]
     */
    private function renderView(string $callback)
    {
        $layoutContent = $this->renderLayout();
        $viewContent = $this->renderJustView($callback);
        return str_replace('{{content}}', $layoutContent, $viewContent);
    }

    /**
     * Returns main layout
     * @return false|string
     */
    public function renderLayout()
    {
        ob_start();
        require_once Application::$ROOT_DIR."/views/layouts/main.php";
        return ob_get_clean();
    }

    /**
     * Returns requested view
     * @param $view
     * @return false|string
     */
    public function renderJustView($view)
    {
        ob_start();
        require_once Application::$ROOT_DIR."/views/".$view.".php";
        return ob_get_clean();
    }
}
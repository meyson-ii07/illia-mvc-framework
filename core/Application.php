<?php

namespace app\core;

class Application
{
    public static string $ROOT_DIR;

    public static Application $app;
    public Router $router;
    public Request $request;
    public Response $response;
    public Session $session;
    public Database $db;

    /**
     * Application constructor.
     * @param $rootDir
     * @param $config
     */
    public function __construct($rootDir, $config)
    {
        self::$ROOT_DIR = $rootDir;
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->session = new Session();
        $this->router = new Router($this->request, $this->response);
        $this->db = new Database($config['db']);
    }

    /**
     *  Echoes content of the page
     */
    public function run()
    {
        echo $this->router->resolve();
    }
}
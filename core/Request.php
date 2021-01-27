<?php


namespace app\core;


class Request
{

    /**
     * Returns current path without parameters
     * @return string
     */
    public function getPath()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $pos = strpos($path, '?');
        if ($pos === false) {
            return $path;
        }
        $path = substr($path,0,$pos);
        return $path;
    }

    /**
     * Returns current method
     * @return mixed
     */
    public function getMethod()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        return strtolower($method);
    }
}
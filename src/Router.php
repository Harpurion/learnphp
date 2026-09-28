<?php
namespace App;

class Router {
    private static $routes = [];

    public static function getRoutes() {
        return self::$routes;
    }

    public static function addRoute($path, $action) {
        self::$routes[] = ['path' => $path, 'action' => $action];
    }

<<<<<<< HEAD
    public function __construct(private $path)
    {
        $this->path = parse_url($this->path, PHP_URL_PATH);
        // dump($this->path);
=======
    public function __construct(private $path) 
    {

>>>>>>> 0f309e55505a169c506c333a5b2ee0637f1023dc
    }

    public function match() {
        foreach(self::$routes as $route){
            if($route['path'] === $this->path){
                return $route;
            }
        }
        return false;
    }
}
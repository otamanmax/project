<?php
/*
 * Need to update router
 * bad release
 */
use App\Http\Request;
use App\Routing\Route;

Class Router
{
    public $routes = array();
    private $params = array();
    protected $request;
    public $route;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function addRoutes($routes)
    {
        foreach ($routes as $key => $route) {
            $this->routes[] = new Route($key,
                $route['controller'],
                $route['method'],
                $route['params']
            );
        }
        $this->setRoute();
    }

    private function setRoute()
    {
        $this->route = $this->getRoute();
        $controller = $this->route->controller();
        $method = $this->route->action();
        $params = $this->route->varsNames();
        $this->route = $this->getRoute();
        require_once __DIR__ . '/../controllers/'. $controller . '/' . $controller . '.php';

        $class = new $controller();
        $response = $class->$method($this->request , ...$params);
        $response->send();
    }

    public function getRoute()
    {
        foreach ($this->routes as $route) {
            // If this route match $url
            if (($varsValues = $route->match($this->request->getUrl())) !== false) {

                // If any variables...
                if ($route->hasVars()) {
                    $varsNames = $route->varsNames();
                    $listVars = [];

                    // Insert these var in $listVars
                    // like: varName => varValue
                    foreach ($varsValues as $key => $match) {

                        if ($key !== 0) {
                            $listVars[$varsNames[$key - 1]] = $match;
                        }
                    }

                    // Now set the route var list
                    $route->setVars($listVars);
                }

                return $route;
            }
        }
    }
}
?>
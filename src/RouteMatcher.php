<?php declare(strict_types=1);

namespace Usr;

final class RouteMatcher
{
    /** @var array<Route> $route_list */
    private array $route_list;

    /** @param array<Route>|Route $routes */
    public function __construct(array|Route $routes = [])
    {
        if (is_array($routes))
        {
            $this->route_list = $routes;
        }
        else if ($routes instanceof Route)
        {
            $this->route_list[] = $routes;
        }
    }

    public function add_route(Route $route): void
    {
        $this->route_list[] = $route;
    }

    public function execute(): void
    {
        $req = Request::get_request();
        foreach ($this->route_list as $route)
        {
            if ($req['path'] === $route->get_path() && $req['method'] === $route->get_http_method()->value)
            {
                $controller_instance = new ($route->get_response_controller());
                call_user_func_array([$controller_instance, $route->get_controller_method()], [$req['query_params']]);
            }
        }
    }
}
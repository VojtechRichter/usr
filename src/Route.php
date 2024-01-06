<?php declare(strict_types=1);

namespace Usr;

class Route
{
    private string $path;
    private HttpMethod $http_method;
    private string $response_controller;
    private string $controller_method;

    public function __construct(
        string $path,
        string $response_controller,
        string $controller_method,
        HttpMethod $http_method = HttpMethod::GET
    )
    {
        $this->set_path($path);
        $this->response_controller = $response_controller;
        $this->controller_method = $controller_method;
        $this->http_method = $http_method;
    }

    public function get_path(): string
    {
        return $this->path;
    }

    public function set_path(string $path): void
    {
        if (!str_starts_with($path, '/'))
        {
            $this->path = '/' . $path;
        }
        else
        {
            $this->path = $path;
        }
    }

    public function set_response_controller(string $response_controller): void
    {
        $this->response_controller = $response_controller;
    }

    public function get_response_controller(): string
    {
        return $this->response_controller;
    }

    public function set_controller_method(string $controller_method): void
    {
        $this->controller_method = $controller_method;
    }

    public function get_controller_method(): string
    {
        return $this->controller_method;
    }

    public function get_http_method(): HttpMethod
    {
        return $this->http_method;
    }

    public function set_http_method(HttpMethod $http_method): void
    {
        $this->http_method = $http_method;
    }
}

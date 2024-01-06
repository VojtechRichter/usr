<?php declare(strict_types=1);

namespace Usr;

class Request
{
    /**
     * @return array<string, string>
     */
    public static function get_request(): array
    {
        $request =  parse_url($_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        $request['method'] = $_SERVER['REQUEST_METHOD'];

        $query_params = [];
        if (array_key_exists('query', $request))
        {
            foreach (explode('&', $request['query']) as $param)
            {
                $parts = explode('=', $param);
                if ($parts[0] === '')
                {
                    continue;
                }
                if (count($parts) > 1)
                {
                    $query_params[$parts[0]] = $parts[1];
                }
                else
                {
                    $query_params[$parts[0]] = null;
                }
            }
        }

        $request['query_params'] = $query_params;

        return $request;
    }
}
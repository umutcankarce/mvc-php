<?php 

namespace app\Core;

use Closure;

class Route 
{

    private static array $routes = [];

    private static bool $isRoute = false;

    public static function getUri():string
    {
        $uri = $_SERVER["REQUEST_URI"];
        return $uri;
    }

    public static function getMethod():string
    {
        $method = strtolower($_SERVER["REQUEST_METHOD"]);
        return $method;
    }

    public static function trimGetUri(){
        return trim(self::getUri(),"/");
    }

    private static function checkMethod():void
    { 
        $uri    = self::getUri();
        $method = self::getMethod();
        $routes = self::$routes;
        $check  = array_key_exists($method,$routes);

        $supportedMethods = array_filter($routes,function($item) use ($uri)
            {
                return array_key_exists($uri,$item);
            });

            // dd($supportedMethods);

        if(!$check || !in_array($method,array_keys($supportedMethods)))
        {
            $supportedMethods = strtoupper(implode(" | ",array_keys($supportedMethods)));

            echo json_encode([
                "message" => "Method Desteklenmiyor. Desteklenen Methodlar: $supportedMethods"
            ]);
            exit();
        }
        else if(empty($supportedMethods))
        { 
            echo json_encode([
                "message" => $uri." Method Desteklenmiyor."
            ]);
        }
    }

    public static function get(string $url, Closure|string $action)
    {
        self::$routes["get"][$url] = ["action" => $action];

        return new self();
    }

    public static function put(string $url, Closure|string $action)
    {
        self::$routes["put"][$url] = ["action" => $action];

        return new self();
    }

    public static function post(string $url, Closure|string $action)
    {
        self::$routes["post"][$url] = ["action" => $action];

        return new self();
    }

    public static function checkRoute()
    { 
        if(!self::$isRoute)
        {
            viewError("404",[
                'message' => "<b>".self::trimGetUri()."</b>"." Sayfası Bulunamadı!",
                'statusCode' => STATUS_CODE_404,
            ]);
        }
    }

    public static function dispatch():void
    {
      
        
        $uri    = self::getUri();
        $method = self::getMethod();
        $routes = self::$routes;
        self::checkMethod();   

        // View Göster 
        foreach($routes[$method] as $url => $item)
        {
            $pattern = "@^" . $url . "$@";
            if(preg_match($pattern,$uri,$parameters))
            {

                self::$isRoute = true;
                if(is_callable($item["action"])){
                    call_user_func_array($item["action"],$parameters);
                }else { 
                    
                }

         



            }
            else
            { 
           
                // self::checkRoute();
            }
        }

        self::checkRoute();

       

        // #View Göstermek 
       
    }


}
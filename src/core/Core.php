<?php
//dd
class Core
{
    public function start()
    {
        $url = "/";
        $controller = "homeController";
        $action = "index";
        $params = array();

        if (isset($_GET["url"]) && !empty($_GET["url"])) {
            $url = $_GET["url"];
            $url = explode("/", $url);
            $controller = $url[0] . "Controller";
            array_shift($url);
            if (count($url) > 0 && $url != "/") {
                $action = $url[0];
                array_shift($url);
                $params = $url;
            }
        }

        $currentController = new $controller;
        call_user_func_array(array($currentController, $action), $params);
    }
}

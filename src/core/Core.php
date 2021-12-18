<?php
class Core
{
    public function start()
    {
        //    23232/3213
        $url = "/";
        $controller = "homeController";
        $action = "index";
        $params = array();

        if (isset($_GET["url"]) && !empty($_GET["url"])) {
            $url = $_GET["url"];
            $url = explode("/", $url);
            $controller = $url[0] . "Controller";
            // controller  = loginController
            array_shift($url);
            if (count($url) > 0 && $url != "/") {
                $action = $url[0];
                // action = cadastrar
                array_shift($url);
                $params = $url;
                // params = [34232/2323]
            }
        }

        $currentController = new $controller();
        call_user_func_array(array($currentController, $action), $params);
    }
}

<?php

class main_file {

    function __construct() {
        try {

            $url = isset($_GET['url']) ? $_GET['url'] : null;
            $url = rtrim($url, "/");
            $url = explode("/", "$url");

            if (empty($url[0])) {
                require 'controllers/index.php';
                $controller = new index();
                $controller->loadModel('index');
                $controller->index();
                return false;
            }

            //init Controller Path
            $path = "controllers/" . $url[0] . ".php";

            //Check path exisist
            if (!file_exists($path)) {
                throw new Exception("Invalid Url");
            }
            require "controllers/" . $url[0] . ".php";

            //init the controller if file exsist
            $controller = new $url[0]();
            $controller->loadModel($url[0]);

            $variables = count($url);
            if ($variables >= 3) {
                $variables = 3;
            }

            switch ($variables) {
                case 1:
                    //assign controler index Method
                    $controller->index();
                    break;

                case 2:
                    
                    if (!method_exists($controller, $url[1])) {
                        throw new Exception("No Given Function");
                    }                    
                    $controller->{$url[1]}();
                    break;

                case 3:
                    $data = "";
                    unset($url[0]);
                    $method = $url[1];
                    unset($url[1]);


                    if (!method_exists($controller, $method)) {
                        throw new Exception("No Given Function");
                    }

                    foreach ($url as $value) {
                        $var[] = $value;
                    }

                    $controller->{$method}($var);
                    break;
                default:
                    $controller->index();
                    break;
            }
        } catch (Exception $exc) {
            view::error404($exc->getMessage());
        }
    }
    
    
}
<?php

class controller {

    function __construct() {
        $this->view = new view();
    }

    public function loadModel($name) {

        try {
            $path = 'models/' . $name . '_model.php';
            if (!file_exists($path)) {
                throw new Exception("System Has Model Error");
            }
            require 'models/' . $name . '_model.php';
            $modelName = $name . '_model';
            $this->model = new $modelName();            
        } catch (Exception $exc) {
            view::error404($exc->getMessage());
        }
    }

    public function isLogged() { 
        $logged = session::get('logged');
        if (empty($logged)) {
            header("Location: " . URL . "loging");
            exit;
        }
    }

}
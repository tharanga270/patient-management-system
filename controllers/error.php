<?php
/** error Controler class generated by Prologics framework **/

class error extends controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->view->load('error/index');
    }   
    

}


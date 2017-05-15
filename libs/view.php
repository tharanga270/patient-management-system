<?php

class view {   
    
    var $title,$description,$charset,$author;
    
    public function __construct() {
        $this->charset = "utf-8";
        $this->description = DESCRIPTION;
        $this->title = TITLE;
        $this->author = AUTHOR;
    }
    
    public function load($name, $fullPage = FALSE,$title = "") {   
        
        if(!empty($title)){
            $this->setTitle($title);
        }
        
        if ($fullPage == TRUE) {
            require 'views/header.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        } else {
            require 'views/header.php';
            require 'views/navigation.php';
            require 'views/' . $name . '.php';
            require 'views/footer.php';
        }
    }
    
    public static function setTitle($content){
        $this->title = $content;
    }
    
    public static function error404($error){
        require 'views/error/index.php';
        die();
    }
    
    

    

}


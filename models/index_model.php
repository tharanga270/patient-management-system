<?php
/*
 *  index Model class Generated by Prologics Framework
 */

class index_model extends model{
    
    function __construct() {
        parent::__construct();
    }   

    function loginDo(){
        header("Location: " . URL . "dashboard");
        /*
        try {
            $systemPassword = PASSWORD;

            if (empty($systemPassword)) {
                throw new Exception();
            }

            $username = $_POST['username'];
            $password = $_POST['password'];

            if ($username == USERNAME && $password == PASSWORD) {
                session::set("loggedIn", true);
                header("Location: " . URL . "dashboard");
                exit;
            } else {
                throw new Exception();
            }
        } catch (Exception $exc) {
            header("Location: " . URL . "index");
            exit;
        }
        */
        
        /*
        $sth = $this->db->prepare("SELECT id FROM `users` WHERE 
            username = :username AND password = MD5(:password)");

        $sth->execute(array(
            ':username' => $_POST['username'],
            ':password' => $_POST['password']  
        ));

        $count = $sth->rowCount();
        if($count > 0){
            //login
            session::init();
            session::set("loggedIn", TRUE);
            header("Location: " . URL . "dashboard");
        }else{
            header("Location: " . URL . "index");
        }
        */
    }
    
    
}


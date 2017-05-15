<?php

class model {

    public $db;
    
    function __construct() {
        if (DB_ACTIVE) {
            $this->db = new database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
            //echo "<br/>"."we are successfully access database";
        }
    }

}


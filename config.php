<?php

/** Prologics IT Solutions Web Framework Version 0.1 
    Visit www.prologics.lk for more details 
    created on 2017-01-11**/

//Set Time Zone
date_default_timezone_set('Asia/Kolkata');

//Set HTML Title Name
define('AUTHOR', 'M.B Isuru Tharanga');
define('TITLE', 'Patient Management v0.1');
define("DESCRIPTION",'this will manage patient details,
like patient CRUD(create,read,update,delete)
also search particular patient view patient history');

//SET Site URL
// Chnage URL to actual domain name after live
define('URL', 'http://localhost/patient_management_v0.1/');

//SET DB Info
define('DB_ACTIVE', TRUE); //change this true when connect a DB
define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');
define('DB_NAME', 'pat_managment');
define('DB_USER', 'root');
define('DB_PASS', '');

define('USERNAME', 'isuru');
define('PASSWORD', 'isuru123@');

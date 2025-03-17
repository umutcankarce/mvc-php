<?php

define("DB_NAME","mvc_system");
define("DB_HOST","localhost");
define("DB_USER","root");
define("DB_PASSWORD","");
define("DB_PREFIX","");
define("DB_SUFFIX","");
define("DB_CHARSET","utf8mb4");
try {

    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME.';charset='.DB_CHARSET;
    $db  = new PDO($dsn, DB_USER, DB_PASSWORD);

}catch(Exception $ex){ 
    print_r($ex->getMessage());
}
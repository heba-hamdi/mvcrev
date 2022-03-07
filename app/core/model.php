<?php
namespace MVCREV\core;
use Dcblogdev\PdoWrapper\Database;

class model{
    public static function db(){
    $options = [
        //required
        'username' => USERNAME,
        'database' => DATABASE,
        //optional
        'password' => PASSWORD,
        'type' => DATABASE_TYPE,
        'charset' => 'utf8',
        'host' => SERVER,
        'port' => '3306'
    ];
    
    return $db = new Database($options);
}
}
<?php
session_start();
ini_set('display_errors', 1);
set_include_path(get_include_path()
    .PATH_SEPARATOR.'application/controllers'
    .PATH_SEPARATOR.'application/models'
    .PATH_SEPARATOR.'application/views');
function core($class){
    include $class.'.php';
}
spl_autoload_register('autoload');
class Db_ext {
    protected static $dsn = 'mysql:dbname=sid2;host=localhost';
    protected static $user = 'root';
    protected static $password = '';
    protected static $_instance;
    public static function getInstance(){
        if(self::$_instance instanceof PDO){
            return self::$_instance;
        }else{
            try{
                return self::$_instance = new PDO(self::$dsn,self::$user,self::$password);
            }catch(Exception $error){
                echo $error->getCode().'<br>';
                echo $error->getMessage().'<br>';
                echo $error->getLine().'<br>';
            }
        }
    }
    protected function __clone(){}
}
$db = Db_ext::getInstance();

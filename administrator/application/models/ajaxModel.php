<?php
class ajaxModel{
    public function ajax($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        if(isset($_POST)){
            $lib->checkUser($_POST['login'], $_POST['pass'], $db);
        }
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
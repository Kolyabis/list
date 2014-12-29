<?php
class ajaxModel{
    public function ajax($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        if(isset($_POST)){
            $lib->checkUser($_POST['login'], $_POST['pass'], $db);
        }
        $lib->checkArray($params);
        ob_start();
        include(__DIR__.'/'.$file);
        return ob_get_clean();
    }
}
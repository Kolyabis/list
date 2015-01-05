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
    /* Метод удаления категории в админпанели через AJAX */
    public function del_category($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        if(isset($_POST)){
            echo 'post';
        }
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
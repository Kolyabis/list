<?php
class IndexModel{
    public function listGo($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        if(isset($_POST)){
            $lib->checkUser($_POST['login'], $_POST['pass'], $db);
        }
        /*$menu = new mod_menu();
        $mainMenu = $menu->get_menu($db);*/
        $lib->checkArray($params);
        ob_start();
        include(__DIR__.'/'.$file);
        return ob_get_clean();
    }
}
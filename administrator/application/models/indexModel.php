<?php
class IndexModel{
    public function listGo($file,$params = null){
        $db = Db::getInstance();
        //var_dump($db);
        $lib = new lib($db);
        $lib->checkUser($log = null, $pass = null, $db);
        /*$menu = new mod_menu();
        $mainMenu = $menu->get_menu($db);
        $params['mainMenu'] = $mainMenu;*/
        $lib->checkArray($params);
        ob_start();
        include(__DIR__.'/'.$file);
        return ob_get_clean();
    }
}
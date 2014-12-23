<?php
class IndexModel{
    public function listGo($file,$params = null){
        $db = Db_ext::getInstance();
        $lib = new lib();
        $menu = new mod_menu();
        $mainMenu = $menu->get_menu($db);
        $params['mainMenu'] = $mainMenu;
        $lib->checkArray($params);
        ob_start();
        include(__DIR__.'/'.$file);
        return ob_get_clean();
    }
}
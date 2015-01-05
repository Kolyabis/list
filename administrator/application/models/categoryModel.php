<?php
class categoryModel{
    public function get_category($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->get_session();
        $params['login'] = $lib->get_user($params['token'], $db);
        $params['menuPanel'] = $lib->menuPanel();
        $params['list_cat'] = $lib->get_list_category();
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
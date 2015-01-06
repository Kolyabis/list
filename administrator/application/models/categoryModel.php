<?php
class categoryModel{
    /******************************* Метод модели для вывода списка категорий ***************************************/
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
    /***************************** Метод модели для добавления новой категории **************************************/
    public function set_newCategory($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->get_session();
        $params['login'] = $lib->get_user($params['token'], $db);
        $params['menuPanel'] = $lib->menuPanel();

        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
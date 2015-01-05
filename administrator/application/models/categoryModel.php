<?php
class categoryModel{
    public function get_category($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->get_session();
        $params['login'] = $lib->get_user($params['token'], $db);
        $params['menuPanel'] = $lib->menuPanel();
        $sql_category = $db->query("SELECT * FROM category");
        $result = $sql_category->fetchAll(PDO::FETCH_ASSOC);
        $params['category'] = $result;
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
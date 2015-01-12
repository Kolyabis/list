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
    public function addCategory($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->get_session();
        $params['login'] = $lib->get_user($params['token'], $db);
        $params['menuPanel'] = $lib->menuPanel();
        $sql_list_cat = $db->query("SELECT id, name, parent_id FROM category");
        $res_list = $sql_list_cat->fetchAll(PDO::FETCH_ASSOC);
        if(!$res_list){
            exit('Проблема подключения к базе!');
        }else{
            $params['list_cat'] = $res_list;
        }
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
    /****************************** Метод удаления категории в админпанели через AJAX ***************************/
    public function del_category($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        if(isset($_POST)){
            $lib->del_cat($_POST['id'], $db, 'category');
        }
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }

}
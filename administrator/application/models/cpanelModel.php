<?php
class CpanelModel{
    public function cpanel($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->get_session();
        $params['login'] = $lib->get_user($params['token'], $db);
        $params['last_modifay_table'] = $lib->get_table($db);
        /* Присоединяю массив меню панели */
        $params['menuPanel'] = $lib->menuPanel();;
        $lib->checkArray($params);
        //ob_start();
        include(__DIR__.'/'.$file);
        //return ob_get_clean();
    }
}
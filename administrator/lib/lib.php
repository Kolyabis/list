<?php
class lib{
    /**************************************** Проверка на массив ************************************/
    public function checkArray($arr){
        if(is_array($arr) && !empty($arr)){
            return $arr;
        }
    }
    /******************************* Метод проверки ЮЗЕРА и возврат ajax ***************************/
    public function checkUser($login = null, $pass = null, $db){
        $queryUser = $db->query("SELECT `token` FROM user WHERE `name` = '$login' and `pass` = '$pass'");
        $result = $queryUser->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            echo $result[0]['token'];
        }

    }
    /************************* Метод проверки новой или продолжения старой сессии ********************/
    public static function get_session(){
        if(isset($_SESSION['session'])){
            //$token = md5(mt_rand(2, 10000));
            return true;
        }else{
            unset($_SESSION['session']);
            header("Location: http://list/administrator/");
        }
    }
    /***************************************** Метод запуска сессии **********************************/
    public static function set_session(){
        if(!isset($_SESSION['session'])){
            $_SESSION['session'] = $_COOKIE["PHPSESSID"];
        }
    }
    /***************************************** Метод выбора ЮЗЕРА ************************************/
    public function get_user($token, $db){
        $queryUser = $db->query("SELECT `name` FROM user WHERE `token` = '$token'");
        $result = $queryUser->fetchAll(PDO::FETCH_ASSOC);
        if($result){
            return $result[0]['name'];
        }else{
            unset($_SESSION['session']);
            header("Location: http://list/administrator/");
        }
    }
    /********************** Метод вывода информации или последние изминения в таблицах ***************/
    public function info_modifay($db){
        $info = array();
        $infoCat = $db->query("SELECT id, `name`, data FROM category ORDER BY data DESC, data DESC LIMIT 0, 1");
        $res_infoCat = $infoCat->fetchAll(PDO::FETCH_ASSOC);
        if($res_infoCat){
            $info['category'] = $res_infoCat[0];
            return $info;
        }else{
            return false;
        }
    }
    /****************************** Метод формирования массива для меню панели ***********************/
    public function menuPanel(){
        $menu = array(
                      'category'=>'Категории',
                      'articles'=>'Материалы',
                      'menu'=>'Меню',
                      'media'=>'Медиа менеджер'
                    );
        return $menu;
    }
}

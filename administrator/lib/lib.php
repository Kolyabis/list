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
    /******************* Получаем имена всех таблиц в базе и последнии изминения в них по дате**************************/
    public function get_table($db){
        $last_modifay = array();
        $list_db = $db->query("SHOW TABLES FROM 2z");
        $res_db = $list_db->fetchAll(PDO::FETCH_ASSOC);
        if(!$res_db){
            exit('Проблема подключения к базе!');
        }else{
            $cnt = count($res_db);
            for($i = 0; $i < $cnt; $i++){
                $list = $db->query("SELECT * FROM ".$res_db[$i]['Tables_in_2z']." ORDER BY data DESC, data DESC LIMIT 0, 1");
                $tab_db = $list->fetchAll(PDO::FETCH_ASSOC);
                $last_modifay[$res_db[$i]['Tables_in_2z']] = $tab_db[0];
            }
        }
        return $last_modifay;
    }
    /****************************** Метод формирования массива для меню панели ***********************/
    public static  function menuPanel(){
        $menu = array(
                      'category'=>'Категории',
                      'articles'=>'Материалы',
                      'menu'=>'Меню',
                      'media'=>'Медиа менеджер'
                    );
        return $menu;
    }
    /************************************* Метод перевода на Русский **********************************/
    public static function lan($translation){
        $filename = 'application/lang/langueg.php';
        if(file_exists($filename)){
            include_once($filename);
            $return = $$translation;
            return $return;
        }
    }
}

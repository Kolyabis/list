<?php
//include_once('/administrator/conf.php');
class lib{
    /**************************************** Проверка на массив ************************************/
    public function checkArray($arr){
        if(is_array($arr) && !empty($arr)){
            return $arr;
        }
    }
    /******************************* Метод проверки ЮЗЕРА и возврат ajax ***************************/
    public function checkUser($log = null, $pass = null, $db){
        $queryUser = $db->query("SELECT name, pass FROM user WHERE `name` = '$login' and `pass` = $pass");
        print_r($queryUser);
        //$result = $queryUser->fetchAll(PDO::FETCH_ASSOC);

    }
}
/*$user = new lid();
if(isset($_POST['login']) and !empty($_POST['login']) and isset($_POST['pass']) and !empty($_POST['pass'])){
    $user->checkUser($_POST['login'], $_POST['pass']);
}*/
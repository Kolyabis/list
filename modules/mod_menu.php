<?php
class mod_menu{
    /* Get_Menu */
    public function get_menu(){
       $db = mysql_connect('localhost','root','');
         if(!$db){
             exit(mysql_error());
         }
         if(!mysql_select_db('2z',$db)){
             exit(mysql_error());
         }
         $sql = "select id, page, parent_id from mainmenu";
         $result = mysql_query($sql);
         if(!$result){
             return null;
         }
         $mainMenu = array();
         if(mysql_num_rows($result) != 0){
             for($i = 0; $i < mysql_num_rows($result); $i++){
                 $row = mysql_fetch_array($result, MYSQL_ASSOC);
                 if(empty($mainMenu[$row['parent_id']])){
                     $mainMenu[$row['parent_id']] = array();
                 }
                 $mainMenu[$row['parent_id']][] = $row;
             }
         }
         return $mainMenu;
        /*$sql = $db->query("select id, page, parent_id from mainmenu");
        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
        if(!$result){
            return null;
        }
        $mainMenu = array();
        $row = mysql_num_rows($db->query("select id, page, parent_id from mainmenu"));
        print_r($row);
        if($cnt != 0){
            echo 'Ne 0 ';
            for($i = 0; $i < $cnt; $i++){
                if(empty($mainMenu[$result[$i]['parent_id']])){
                    //$mainMenu[$result['parent_id']] = array();
                    echo $result[$i]['parent_id'];
                }
                $mainMenu[$result[$i]['parent_id']] = $result;

            }

        }
        echo ' '.$cnt;
        echo '<pre>';
        print_r($mainMenu);
        echo '</pre>';*/

    }
}
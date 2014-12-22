<?php
class mod_menu{
    /* mainMenu */
    public function mainMenu($db){
        $rez = $db->query("select * from mainmenu");
        $mainMenu = array();
        $rez = $rez->fetchAll(PDO::FETCH_ASSOC);
        $cnt = count($rez)-1;
        for($i = 0; $i <= $cnt; $i++){
            if(empty($rez[$i]['child'])){
                $mainMenu[$i] = $rez[$i];
                for($n = 0; $n <= $cnt; $n++){
                    if($rez[$n]['child'] == $rez[$i]['id']){
                        $mainMenu[$i]['child'][] = $rez[$n];
                    }
                }
            }
        }
        return $mainMenu;
    }
}
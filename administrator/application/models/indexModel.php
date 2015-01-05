<?php
class IndexModel{
    public function listGo($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->set_session();
        $lib->checkArray($params);
        include(__DIR__.'/'.$file);
    }
}
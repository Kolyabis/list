<?php
class IndexModel{
    public function listGo($file,$params = null){
        $db = Db::getInstance();
        $lib = new lib();
        $lib->set_session();
        $lib->checkArray($params);
        ob_start();
        include(__DIR__.'/'.$file);
        return ob_get_clean();
    }
}
<?php
class lib{
    public function checkArray($arr){
        if(is_array($arr) && !empty($arr)){
            return $arr;
        }
    }
}

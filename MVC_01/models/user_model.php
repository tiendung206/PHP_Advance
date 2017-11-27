<?php
require_once 'config/config.php';
class user_model{
    private $username;
    private $fullname;
    
    public function user_list(){
        return ['username'=>'hellochipboy','fullname'=>'Nguyen Van A'];
    }
    
    public function user_add($data){
        return true;
    }
}
<?php
require_once 'models/user_model.php';
class user_controller {
    private $user_model;
    public function __construct(){
        $this->user_model = new user_model();
    }
    
    public function user_list(){        
        $user_list = $this->user_model->user_list();
        include 'views/user_list.php';
    }
    
    public function user_add(){
        if(isset($_POST['username'])){           
            $this->user_model->user_add($_POST);
            
            header('Location: index.php');
        }
        include 'views/user_add.php';
    }
}
?>
<?php
    require 'controllers/user_controller.php';
    
    $user_controller = new user_controller();
    
    if(isset($_GET['controller']) && 
        $_GET['controller'] == 'user_add'){
        $user_controller->user_add();
    }else{
        $user_controller->user_list();
    }
?>
<?php
class UserSession{

    public function __construct(){
        session_start();
    }
    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
    }
    public function getCurrentUser(){
        if($_SESSION['user'] == null || $_SESSION['user'] == 1){
            return $_SESSION['user'] = 1;
        }else{
            return $_SESSION['user'];
        }
    }
    public function closeSession(){
        session_unset();
        session_destroy();
    }
}
?>
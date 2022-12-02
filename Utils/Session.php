<?php
    namespace Utils;
    use Models\User as User;
    
    class Session {
        
        public static function CreateSession (User $user) {
            $_SESSION["loggedUser"] = $user;
        }

        public static function DeleteSession (){
            session_start();
            session_destroy();
        }

        public static function VerifySession(){
            if(!isset($_SESSION["loggedUser"])){
                header("Location: ". FRONT_ROOT . "Home/Index");
            }
        }

        public static function VerifyIsLogged() {
            if(isset($_SESSION["loggedUser"])){
                header("Location: ". FRONT_ROOT . "Home/Add");
            }
        }

    } 
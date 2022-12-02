<?php 

namespace Controllers;

class UserController{


    public function Login($logemail, $logpass){
        if($logemail == "admin@admin.com" && $logpass == "admin"){
            header("location:".FRONT_ROOT."Home/Home");
        }
    }
    public function susSignup(){
        header("location:".FRONT_ROOT."Home/SuscefullSingUp");
    }

}







?>
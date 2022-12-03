<?php 

    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use Models\User as User;
use Utils\Session;

class UserController{


    public function Login($email, $password){
        $user = new User;
        $userDAO = new UserDAO; 
        $user->setEmail($email);
        $user->setPassword($password);
        if($userDAO->searchUser($user)){
            Session::CreateSession($user);
            header("location:".FRONT_ROOT."Home/Home");
        }
        else{
            header("location:".FRONT_ROOT."Home/Index");
        }
    }
    public function susSignup(){
        header("location:".FRONT_ROOT."Home/SuscefullSingUp");
    }

    public function Register($name, $email, $password){
        $user = new User;
        $userDAO = new UserDAO; 
        $user->setName($name);
        $user->setEmail($email);
        $user->setPassword($password);
        if($userDAO->Add($user)){
            $this->susSignup(); 
        }else{
            header("location:".FRONT_ROOT."Home/Index");

            /*echo'<script type="text/javascript">
                alert("Email en uso");
                </script>';*/
                
        }
        
       
    }

}







?>
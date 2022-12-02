<?php 

    namespace Controllers;

    use DAO\UserDAO as UserDAO;
    use Models\User as User;

class UserController{


    public function Login($logemail, $logpass){
        if($logemail == "admin@admin.com" && $logpass == "admin"){
            header("location:".FRONT_ROOT."Home/Home");
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
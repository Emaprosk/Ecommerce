<?php
    namespace Controllers;
    use Utils\Session as Session;

    class HomeController
    {
        public function Index($message = "")
        {
            require_once(VIEWS_PATH."index.php");
        }


        public function Home($message = "")
        {
            require_once(VIEWS_PATH."home.php");
        }



        public function Register()
        {
            require_once(VIEWS_PATH."registerOwner.php");
        }
         


        public function RegisterKeeper()
        {
            require_once(VIEWS_PATH."registerKeeper.php");
        }


        public function KeeperView()
        {
            require_once(VIEWS_PATH."reserveList.php");  //
        }


        public function OwnerView()
        {
            require_once(VIEWS_PATH."keeper-list.php");  //
        }


        public function Add($message = "")
        {
            Session::VerifySession();
            require_once(VIEWS_PATH."pet-Add.php"); //
        } 

        public function Profile(){
            require_once(VIEWS_PATH."list-reserve.php");
        }

        public function ProfileKeeper(){
            require_once(VIEWS_PATH."profileKeeper.php");
        }


        public function Logout()
        {
            require_once(VIEWS_PATH."logout.php");
        } 
        
 
        public function List($message = "")
        {
            require_once(VIEWS_PATH."keeper-list.php");
        }  

        public function PetAdd(){
            require_once(VIEWS_PATH."pet-add.php");
        }

        public function PetList(){
            require_once(VIEWS_PATH."pet-list.php");
        }

    }
?>
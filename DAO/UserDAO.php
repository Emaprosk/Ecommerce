<?php
    namespace DAO;

    use Models\User as User;

    class UserDAO{
        private $connection;
        private $tableName = "user";    
        



        public function Add(User $user){
            if($this->searchEmail($user)){
                
                return false;
            }
            else{
                $query = ("INSERT INTO user(name,email, password) 
                VALUES (:name, :email, :password)");

                $parameters["name"] =  $user->getName();
                $parameters["email"] = $user->getEmail();
                $parameters["password"] = $user->getPassword();

                $this->connection = Connection::GetInstance();

                $this->connection->Execute($query, $parameters, QueryType::Query);

                return true;
            }
        }



        public function searchEmail($user){
            $userList = $this->GetAll();
            foreach($userList as $aux){
                if($aux->getEmail() == $user->getEmail()){
                    return true;
                }
            }
            return false;
        }



        
        public function searchUser($user){
            $userList = $this->GetAll();
            foreach($userList as $aux){
                if($aux->getEmail() == $user->getEmail() && $aux->getPassword() == $user->getPassword()){
                    return true;
                }
            }
            return false;
        }




        public function returnUser($user){
            $userList = $this->GetAll();
            $user = new User;
            foreach($userList as $aux){
                if($aux->getEmail() == $user->getEmail() && $aux->getPassword() == $user->getPassword()){
                    $user = $aux;
                }
            }
            return $user;
        }

        public function returnUserById($id){
            $userList = $this->GetAll();
            $user = new User;
            foreach($userList as $aux){
                if($aux->getId() == $id){
                    $user = $aux;
                }
            }   
            return $user;
        }


        
        function GetAll(){
            $userList = array();

            $query = ("SELECT idUser, name, email, password FROM ".$this->tableName);

            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query);

            foreach($result as $row)
            {
                $user = new User;
                $user->setId($row["idUser"]);
                $user->setName($row["name"]);
                $user->setEmail($row["email"]);
                $user->setPassword($row["password"]);

                array_push($userList, $user);
            }

            return $userList;
        }
        
        function GetById($id){

        }

        function Remove($id){

        }
    }
?>
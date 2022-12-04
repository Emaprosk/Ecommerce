<?php
    namespace DAO;

    use Models\Articulo as Articulo;
use mysqli;

    class ArticuloDAO{
        private $connection;
        private $tableName = "articulo";

        public function Add(Articulo $art){

            $query = ("INSERT INTO articulo(title,description, image) 
            VALUES (:title, :description, :image)");

            $parameters["title"] =  $art->getTitle();
            $parameters["description"] = $art->getDescription();
            $parameters["image"] = $art->getImage();

            $this->connection = Connection::GetInstance();

            $this->connection->Execute($query, $parameters, QueryType::Query);            
        }

        function GetAll(){
            $artList = array();

            $query = ("SELECT  title, description, image FROM ".$this->tableName);
            
            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query);
            
            foreach($result as $row)
            {
                $newArti = new Articulo;
                $newArti->setTitle($row["title"]);
                $newArti->setDescription($row["description"]);
                $newArti->setImage($row["image"]);
                
                //header("Content-type: image/jpg"); 

                /*$imgData = $row["image"]->fetch_assoc();
                echo $imgData["image"];*/

                array_push($artList, $newArti);
            }

            return $artList;
            
        }
        

        
    }
?>
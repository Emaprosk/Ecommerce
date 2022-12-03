<?php
    namespace DAO;

    use Models\Articulo as Articulo;

    class ArticuloDAO{
        private $connection;
        private $tableName = "articulo";

        public function Add(Articulo $art){

            $query = ("INSERT INTO articulo(title,description) 
            VALUES (:title, :description)");

            $parameters["title"] =  $art->getTitle();
            $parameters["description"] = $art->getDescription();

            $this->connection = Connection::GetInstance();

            $this->connection->Execute($query, $parameters, QueryType::Query);            
        }

        function GetAll(){
            $artList = array();

            $query = ("SELECT  title, description FROM ".$this->tableName);

            $this->connection = Connection::GetInstance();

            $result = $this->connection->Execute($query);

            foreach($result as $row)
            {
                $newArti = new Articulo;
                $newArti->setTitle($row["title"]);
                $newArti->setDescription($row["description"]);

                array_push($artList, $newArti);
            }

            return $artList;
        }

        
    }
?>
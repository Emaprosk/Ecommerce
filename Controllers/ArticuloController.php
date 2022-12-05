<?php
    namespace Controllers;
    use Utils\Session as Session;

    use Models\Articulo as Articulo;
    use DAO\ArticuloDAO as ArticuloDAO;

    class ArticuloController
    {
        public function Add($titulo,$description, $image){
            $artDAO = new ArticuloDAO;
            $newArticulo = new Articulo;
            $newArticulo ->setTitle($titulo);
            $newArticulo->setDescription($description);

            $check = getimagesize($_FILES["image"]["tmp_name"]);
            if($check !== false){
                $image = $_FILES['image']['tmp_name'];
                $imgContent = addslashes(file_get_contents($image));
            }
            $newArticulo->setImage($imgContent);

            $artDAO->Add($newArticulo);
            header("location:".FRONT_ROOT."Home/Home");
        }

    }
?>
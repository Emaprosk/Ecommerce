<?php
    namespace Controllers;
    use Utils\Session as Session;

    use Models\Articulo as Articulo;
    use DAO\ArticuloDAO as ArticuloDAO;

    class ArticuloController
    {
        public function CrearArticulo($titulo,$description){
            $artDAO = new ArticuloDAO;
            $newArticulo = new Articulo;

            $newArticulo ->setTitle($titulo);
            $newArticulo->setDescription($description);

            $artDAO->Add($newArticulo);
            header("location:".FRONT_ROOT."Home/Home");
        }

    }
?>
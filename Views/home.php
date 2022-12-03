
<?php

use DAO\ArticuloDAO;

     require_once('nav.php');
?>
<main class="mx-auto" style="width: 50%;">
    <h1 class="mt-5">Agregar articulo</h1>

    <form action="<?php echo FRONT_ROOT?>Articulo/CrearArticulo" method="post">
        <input type="text" name="titulo" id="titulo" placeholder="Titulo">
        <input type="text" name="desciption" id="description" placeholder="Descripcion">
        <button type="submit" class="btn">Crear Articulo</button>
    </form>

    <h1 class="mt-5">Articulos</h1>
    <div>
        <?php
        $articuloDAO = new ArticuloDAO;
        $arrArticulos = array();
        $arrArticulos = $articuloDAO->GetAll();

        foreach ($arrArticulos as $arti) {
            ?>
            <div class="card mt-4" style="width: 18rem; height: 10rem">
                <div class="card-body color">
                    <h5 class="card-title"><?php echo $arti->getTitle()?></h5>
                    <p class="card-text"><?php echo $arti->getDescription()?></p>
                </div>
            </div>
            <?php
        }
        
        
        ?>
    </div>

</main>

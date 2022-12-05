<?php

    use DAO\ArticuloDAO as ArticuloDAO;
    use Utils\Session;

    Session::VerifySession();
    require_once('nav.php');
?>
<main>
    <div class="mx-auto" style="width: 40%;">
        <h1 class="mt-5">Agregar articulo</h1>

        <form action="<?php echo FRONT_ROOT?>Articulo/Add" method="post" enctype="multipart/form-data">
            <input type="text" name="titulo" id="titulo" placeholder="Titulo" required >
            <input type="text" name="desciption" id="description" placeholder="Descripcion" required >
            <input type="file" name="image" id="image"  required>
            <button type="submit" class="btn">Crear Articulo</button>
        </form>
    </div>
    <div class="mx-auto" style="width: 73%;">
    <h1 class="mt-5">Articulos</h1>
    </div>
    <div class="container">
        <div class="row col-xs-4">
            <?php
            $articuloDAO = new ArticuloDAO;
            $arrArticulos = array();
            $arrArticulos = $articuloDAO->GetAll();

            foreach ($arrArticulos as $arti) {
                ?>
                <div class="card mt-4 ms-4" style="width: 18rem; height: 10rem">
                    <div class="card-body color">
                        <h5 class="card-title"><?php echo $arti->getTitle()?></h5>
                        <p class="card-text"><?php echo $arti->getDescription()?></p>
                        <p class="card-text"><?php echo base64_encode($arti->getImage())?></p>
                        <img src="data:image/jpg;base64,<?php echo $arti->getImage()?>"  alt="">
                    </div>
                </div>
                <?php
            }
            
            
            ?>
        </div>
    </div>

</main>
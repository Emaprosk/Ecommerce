
<?php
     require_once('nav.php');
?>
<main class="mx-auto" style="width: 50%;">
    <h1>hello world</h1>

    <form action="<?php echo FRONT_ROOT?>Articulo/CrearArticulo" method="post">
        <input type="text" name="titulo" id="titulo" placeholder="Titulo">
        <input type="text" name="desciption" id="description" placeholder="Descripcion">
        <button type="submit" class="btn">Crear Articulo</button>
    </form>


</main>

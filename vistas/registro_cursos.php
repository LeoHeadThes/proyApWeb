<form action="registrocursos.php" method="post" enctype="multipart/form-data">
    <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo">
    <label for="descripcion">Descripcion</label>
        <input type="text" name="descripcion" id="descripcion">
    <label for="precio">Precio</label>
        <input type="number" name="precio" id="precio">
    <label for="imagen">Imagen</label>
        <input type="file" name="imagen" id="imagen" >
    <button type="submit">Registrar Curso</button>
</form>
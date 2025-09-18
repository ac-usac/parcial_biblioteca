<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="my-4 text-center">Editar Libro</h1>
            <form action="<?= base_url('modificar_libro') ?>" method="post">
                <label for="txt_id" class="form-label">Código</label>
                <input type="text" name="txt_id" id="txt_id" class="form-control" 
                    value="<?= $datos['id'] ?>" readonly>

                <label for="txt_titulo" class="form-label mt-2">Título</label>
                <input type="text" name="txt_titulo" id="txt_titulo" class="form-control" 
                    value="<?= $datos['titulo'] ?>">

                <label for="txt_fecha_publicacion" class="form-label mt-2">Fecha de Publicación</label>
                <input type="date" name="txt_fecha_publicacion" id="txt_fecha_publicacion" class="form-control" 
                    value="<?= $datos['fecha_publicacion'] ?>">

                <label for="txt_precio" class="form-label mt-2">Precio</label>
                <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control" 
                    value="<?= $datos['precio'] ?>">

                <label for="txt_editorial" class="form-label mt-2">Editorial</label>
                <input type="number" name="txt_editorial" id="txt_editorial" class="form-control" 
                    value="<?= $datos['editorial_id'] ?>">

                <label for="txt_isbn" class="form-label mt-2">ISBN</label>
                <input type="text" name="txt_isbn" id="txt_isbn" class="form-control" 
                    value="<?= $datos['isbn'] ?>">

                <button type="submit" class="form-control btn btn-primary mt-3">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

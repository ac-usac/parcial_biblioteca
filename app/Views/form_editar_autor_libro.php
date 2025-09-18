<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Relación Autor-Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="my-4 text-center">Editar Relación Autor - Libro</h1>
            <form action="<?= base_url('modificar_autor_libro') ?>" method="post">
                <label for="txt_libro" class="form-label">ID Libro</label>
                <input type="text" name="txt_libro" id="txt_libro" class="form-control" 
                    value="<?= $datos['libro_id'] ?>" readonly>

                <label for="txt_autor" class="form-label mt-2">ID Autor</label>
                <input type="text" name="txt_autor" id="txt_autor" class="form-control" 
                    value="<?= $datos['autor_id'] ?>" readonly>

                <button type="submit" class="form-control btn btn-primary mt-3">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

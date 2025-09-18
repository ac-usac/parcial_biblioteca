<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Editorial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="my-4 text-center">Editar Editorial</h1>
            <form action="<?= base_url('modificar_editorial') ?>" method="post">
                <label for="txt_id" class="form-label">Código</label>
                <input type="text" name="txt_id" id="txt_id" class="form-control" 
                    value="<?= $datos['id'] ?>" readonly>

                <label for="txt_nombre" class="form-label mt-2">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" 
                    value="<?= $datos['nombre'] ?>">

                <label for="txt_direccion" class="form-label mt-2">Dirección</label>
                <input type="text" name="txt_direccion" id="txt_direccion" class="form-control" 
                    value="<?= $datos['direccion'] ?>">

                <label for="txt_telefono" class="form-label mt-2">Teléfono</label>
                <input type="text" name="txt_telefono" id="txt_telefono" class="form-control" 
                    value="<?= $datos['telefono'] ?>">

                <label for="txt_email" class="form-label mt-2">Email</label>
                <input type="email" name="txt_email" id="txt_email" class="form-control" 
                    value="<?= $datos['email'] ?>">

                <label for="txt_url" class="form-label mt-2">URL</label>
                <input type="text" name="txt_url" id="txt_url" class="form-control" 
                    value="<?= $datos['url'] ?>">

                <button type="submit" class="form-control btn btn-primary mt-3">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

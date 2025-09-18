<!DOCTYPE html>
<html lang="es" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Autor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <h1 class="my-4 text-center">Editar Autor</h1>
            <form action="<?= base_url('modificar_autor') ?>" method="post">
                <label for="txt_codigo" class="form-label">Código</label>
                <input type="text" name="txt_codigo" id="txt_codigo" class="form-control" 
                    value="<?= $datos['artista_id'] ?>" readonly>

                <label for="txt_nombre" class="form-label mt-2">Nombre</label>
                <input type="text" name="txt_nombre" id="txt_nombre" class="form-control" 
                    value="<?= $datos['nombre'] ?>">

                <label for="txt_apellido" class="form-label mt-2">Apellido</label>
                <input type="text" name="txt_apellido" id="txt_apellido" class="form-control" 
                    value="<?= $datos['apellido'] ?>">

                <label for="txt_fecha_nacimiento" class="form-label mt-2">Fecha de Nacimiento</label>
                <input type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento" class="form-control" 
                    value="<?= $datos['fecha_nacimiento'] ?>">

                <label for="txt_fecha_muerte" class="form-label mt-2">Fecha de Muerte</label>
                <input type="date" name="txt_fecha_muerte" id="txt_fecha_muerte" class="form-control" 
                    value="<?= $datos['fecha_muerte'] ?>">

                <label for="txt_pais" class="form-label mt-2">País</label>
                <input type="number" name="txt_pais" id="txt_pais" class="form-control" 
                    value="<?= $datos['pais_id'] ?>">

                <button type="submit" class="form-control btn btn-primary mt-3">Guardar Cambios</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

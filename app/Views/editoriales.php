<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Editoriales</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Editoriales</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Editorial
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Editorial</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_editorial'); ?>" method="post">
                            <label for="txt_id" class="form-label">ID</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">

                            <label for="txt_direccion" class="form-label">Dirección</label>
                            <input type="text" name="txt_direccion" id="txt_direccion" class="form-control">

                            <label for="txt_telefono" class="form-label">Teléfono</label>
                            <input type="tel" name="txt_telefono" id="txt_telefono" class="form-control">

                            <label for="txt_email" class="form-label">Email</label>
                            <input type="email" name="txt_email" id="txt_email" class="form-control">

                            <label for="txt_url" class="form-label">URL / Sitio Web</label>
                            <input type="url" name="txt_url" id="txt_url" class="form-control">

                            <button type="submit" class="form-control btn btn-primary mt-3">Confirmar</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Teléfono</th>
                    <th>Email</th>
                    <th>URL</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Recorrer todo el array (tabla) y a cada fila
                // o registro se le da el nombre de $editorial
                foreach ($datos as $editorial) {
                ?>
                    <tr>
                        <td> <?= $editorial['id']; ?> </td>
                        <td> <?= $editorial['nombre']; ?> </td>
                        <td> <?= $editorial['direccion']; ?> </td>
                        <td> <?= $editorial['telefono']; ?> </td>
                        <td> <?= $editorial['email']; ?> </td>
                        <td> <?= $editorial['url']; ?> </td>
                        <td>
                            <a href="<?= base_url('eliminar_editorial/') . $editorial['id']; ?>" 
                               class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            <a href="<?= base_url('buscar_editorial/') . $editorial['id']; ?>" 
                               class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                        </td>
                    </tr>
                <?php
                } // Fin del ciclo
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>
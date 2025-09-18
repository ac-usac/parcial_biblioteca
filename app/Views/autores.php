<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Autores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Autores</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Autor
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Autor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('/autores/agregar'); ?>" method="post">
                            <label for="txt_id" class="form-label">ID Artista</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_nombre" class="form-label">Nombre</label>
                            <input type="text" name="txt_nombre" id="txt_nombre" class="form-control">
                            
                            <label for="txt_apellido" class="form-label">Apellido</label>
                            <input type="text" name="txt_apellido" id="txt_apellido" class="form-control">

                            <label for="txt_fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
                            <input type="date" name="txt_fecha_nacimiento" id="txt_fecha_nacimiento" class="form-control">

                            <label for="txt_fecha_muerte" class="form-label">Fecha de Muerte</label>
                            <input type="date" name="txt_fecha_muerte" id="txt_fecha_muerte" class="form-control">
                            
                            <label for="txt_pais_id" class="form-label">ID País</label>
                            <input type="number" name="txt_pais_id" id="txt_pais_id" class="form-control">

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
                    <th>ID Artista</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Nacimiento</th>
                    <th>Muerte</th>
                    <th>ID País</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $autor) {
                ?>
                    <tr>
                        <td> <?= $autor['artista_id']; ?> </td>
                        <td> <?= $autor['nombre']; ?> </td>
                        <td> <?= $autor['apellido']; ?> </td>
                        <td> <?= $autor['fecha_nacimiento']; ?> </td>
                        <td> <?= $autor['fecha_muerte']; ?> </td>
                        <td> <?= $autor['pais_id']; ?> </td>
                        <td>
                            <a href="<?= base_url('/autores/eliminar/') . $autor['artista_id']; ?>" 
                               class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            <a href="<?= base_url('/autores/buscar/') . $autor['artista_id']; ?>" 
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
        xintegrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>

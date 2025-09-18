<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Relación Autores y Libros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Relación Autores y Libros</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Relación
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nueva Relación</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_relacion'); ?>" method="post">
                            <label for="txt_libro" class="form-label">ID del Libro</label>
                            <input type="number" name="txt_libro" id="txt_libro" class="form-control">

                            <label for="txt_autor" class="form-label">ID del Autor</label>
                            <input type="number" name="txt_autor" id="txt_autor" class="form-control">

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
                    <th>ID Libro</th>
                    <th>ID Autor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datos as $relacion) {
                ?>
                    <tr>
                        <td> <?= $relacion['libro_id']; ?> </td>
                        <td> <?= $relacion['autor_id']; ?> </td>
                        <td>
                            <a href="<?= base_url('eliminar_relacion/') . $relacion['libro_id'] . '/' . $relacion['autor_id']; ?>" 
                               class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            <a href="<?= base_url('buscar_relacion/') . $relacion['libro_id'] . '/' . $relacion['autor_id']; ?>" 
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

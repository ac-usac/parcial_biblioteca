
<!doctype html>
<html lang="es" data-bs-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestión de Libros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>Libros</h1>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Agregar Libro
        </button>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Libro</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?= base_url('agregar_libro'); ?>" method="post">
                            <label for="txt_id" class="form-label">ID</label>
                            <input type="number" name="txt_id" id="txt_id" class="form-control">

                            <label for="txt_titulo" class="form-label">Título</label>
                            <input type="text" name="txt_titulo" id="txt_titulo" class="form-control">

                            <label for="txt_fecha" class="form-label">Fecha de Publicación</label>
                            <input type="date" name="txt_fecha" id="txt_fecha" class="form-control">

                            <label for="txt_precio" class="form-label">Precio</label>
                            <input type="number" step="0.01" name="txt_precio" id="txt_precio" class="form-control">

                            <label for="txt_editorial" class="form-label">ID Editorial</label>
                            <input type="number" name="txt_editorial" id="txt_editorial" class="form-control">

                            <label for="txt_isbn" class="form-label">ISBN</label>
                            <input type="text" name="txt_isbn" id="txt_isbn" class="form-control">

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
                    <th>Título</th>
                    <th>Publicación</th>
                    <th>Precio</th>
                    <th>ID Editorial</th>
                    <th>ISBN</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Recorrer todo el array (tabla) y a cada fila
                // o registro se le da el nombre de $libro
                foreach ($datos as $libro) {
                ?>
                    <tr>
                        <td> <?= $libro['id']; ?> </td>
                        <td> <?= $libro['titulo']; ?> </td>
                        <td> <?= $libro['fecha_publicacion']; ?> </td>
                        <td> <?= $libro['precio']; ?> </td>
                        <td> <?= $libro['editorial_id']; ?> </td>
                        <td> <?= $libro['isbn']; ?> </td>
                        <td>
                            <a href="<?= base_url('eliminar_libro/') . $libro['id']; ?>" 
                               class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
                            <a href="<?= base_url('buscar_libro/') . $libro['id']; ?>" 
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
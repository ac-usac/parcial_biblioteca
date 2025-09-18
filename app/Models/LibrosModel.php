<?php

namespace App\Models;

use CodeIgniter\Model;

class LibrosModel extends Model
{
    protected $table      = 'libros';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'id', 'titulo', 'fecha_publicacion', 'precio', 'editorial_id', 'isbn'
    ];
    // protected $returnType    = \App\Entities\Libro::class;
    // protected $useTimestamps = false;
}

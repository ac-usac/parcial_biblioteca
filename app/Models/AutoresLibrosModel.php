<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoresLibrosModel extends Model
{
    protected $table      = 'autores_libros';
    protected $primaryKey = false; // No hay una PK simple
    protected $allowedFields = [
        'libro_id', 'autor_id'
    ];
    // protected $returnType    = \App\Entities\AutorLibro::class;
    // protected $useTimestamps = false;
}

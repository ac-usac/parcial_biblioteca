<?php

namespace App\Models;

use CodeIgniter\Model;

class AutoresModel extends Model
{
    protected $table      = 'autores';
    protected $primaryKey = 'artista_id';
    protected $allowedFields = [
        'artista_id', 'nombre', 'apellido', 'fecha_nacimiento', 'fecha_muerte', 'pais_id'
    ];
    // protected $returnType    = \App\Entities\Autor::class;
    // protected $useTimestamps = false;
}

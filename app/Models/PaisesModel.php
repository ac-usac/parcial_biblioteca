<?php

namespace App\Models;

use CodeIgniter\Model;

class PaisesModel extends Model
{
    protected $table      = 'paises';
    protected $primaryKey = 'pais_id';
    protected $allowedFields = [
        'pais_id', 'nombre'
    ];
    // protected $returnType    = \App\Entities\Pais::class;
    // protected $useTimestamps = false;
}

<?php

namespace App\Controllers;
use App\Models\AutoresLibrosModel;

class AutoresLibrosController extends BaseController
{
    public function index(): string
    {
        $relaciones = new AutoresLibrosModel();
        $datos['datos'] = $relaciones->findAll();
        return view('autores_libros', $datos);
    }

    public function agregarRelacion()
    {
        $relaciones = new AutoresLibrosModel();
        $datos = [
            'libro_id'=>$this->request->getPost('txt_libro'),
            'autor_id'=>$this->request->getPost('txt_autor')
        ];
        $relaciones->insert($datos);
        return $this->index();
    }

    public function eliminarRelacion($libro_id, $autor_id)
    {
        $relaciones = new AutoresLibrosModel();
        $relaciones->where('libro_id', $libro_id)
                   ->where('autor_id', $autor_id)
                   ->delete();
        return $this->index();
    }

    public function buscarRelacion($libro_id, $autor_id)
    {
        $relaciones = new AutoresLibrosModel();
        $datos['datos'] = $relaciones->where('libro_id', $libro_id)
                                     ->where('autor_id', $autor_id)
                                     ->first();
        return view('form_editar_relacion', $datos);
    }
}

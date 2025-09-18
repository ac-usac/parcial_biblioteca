<?php

namespace App\Controllers;
use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index(): string
    {
        $libros = new LibrosModel();
        $datos['datos'] = $libros->findAll();
        return view('libros', $datos);
    }

    public function agregarLibro()
    {
        $libros = new LibrosModel();
        $datos = [
            'id'=>$this->request->getPost('txt_id'),
            'titulo'=>$this->request->getPost('txt_titulo'),
            'fecha_publicacion'=>$this->request->getPost('txt_fecha'),
            'precio'=>$this->request->getPost('txt_precio'),
            'editorial_id'=>$this->request->getPost('txt_editorial'),
            'isbn'=>$this->request->getPost('txt_isbn')
        ];
        $libros->insert($datos);
        return $this->index();
    }

    public function modificarLibro()
    {
        $libros = new LibrosModel();
        $datos = [
            'id'=>$this->request->getPost('txt_id'),
            'titulo'=>$this->request->getPost('txt_titulo'),
            'fecha_publicacion'=>$this->request->getPost('txt_fecha'),
            'precio'=>$this->request->getPost('txt_precio'),
            'editorial_id'=>$this->request->getPost('txt_editorial'),
            'isbn'=>$this->request->getPost('txt_isbn')
        ];
        $libros->update($datos['id'], $datos);
        return $this->index();
    }

    public function eliminarLibro($id)
    {
        $libros = new LibrosModel();
        $libros->delete($id);
        return $this->index();
    }

    public function buscarLibro($id)
    {
        $libros = new LibrosModel();
        $datos['datos'] = $libros->where('id', $id)->first();
        return view('form_editar_libro', $datos);
    }
}

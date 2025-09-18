<?php

namespace App\Controllers;
use App\Models\EditorialesModel;

class EditorialesController extends BaseController
{
    public function index(): string
    {
        $editoriales = new EditorialesModel();
        $datos['datos'] = $editoriales->findAll();
        return view('editoriales', $datos);
    }

    public function agregarEditorial()
    {
        $editoriales = new EditorialesModel();
        $datos = [
            'id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'url'=>$this->request->getPost('txt_url')
        ];
        $editoriales->insert($datos);
        return $this->index();
    }

    public function modificarEditorial()
    {
        $editoriales = new EditorialesModel();
        $datos = [
            'id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre'),
            'direccion'=>$this->request->getPost('txt_direccion'),
            'telefono'=>$this->request->getPost('txt_telefono'),
            'email'=>$this->request->getPost('txt_email'),
            'url'=>$this->request->getPost('txt_url')
        ];
        $editoriales->update($datos['id'], $datos);
        return $this->index();
    }

    public function eliminarEditorial($id)
    {
        $editoriales = new EditorialesModel();
        $editoriales->delete($id);
        return $this->index();
    }

    public function buscarEditorial($id)
    {
        $editoriales = new EditorialesModel();
        $datos['datos'] = $editoriales->where('id', $id)->first();
        return view('form_editar_editorial', $datos);
    }
}

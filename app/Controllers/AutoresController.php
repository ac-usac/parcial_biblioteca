<?php

namespace App\Controllers;
use App\Models\AutoresModel;

class AutoresController extends BaseController
{
    public function index(): string
    {
        $autores = new AutoresModel();
        $datos['datos'] = $autores->findAll();
        return view('autores', $datos);
    }

    public function agregarAutor()
    {
        $autores = new AutoresModel();
        $datos = [
            'artista_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nacimiento' => $this->request->getPost('txt_fecha_nacimiento'),
            'fecha_muerte' => $this->request->getPost('txt_fecha_muerte'),
            'pais_id' => $this->request->getPost('txt_pais_id')
        ];
        $autores->insert($datos);
        return redirect()->to(base_url('/autores'));
    }

    public function modificarAutor()
    {
        $autores = new AutoresModel();
        $datos = [
            'artista_id' => $this->request->getPost('txt_id'),
            'nombre' => $this->request->getPost('txt_nombre'),
            'apellido' => $this->request->getPost('txt_apellido'),
            'fecha_nacimiento' => $this->request->getPost('txt_fecha_nacimiento'),
            'fecha_muerte' => $this->request->getPost('txt_fecha_muerte'),
            'pais_id' => $this->request->getPost('txt_pais_id')
        ];
        $autores->update($datos['artista_id'], $datos);
        return redirect()->to(base_url('/autores'));
    }

    public function eliminarAutor($id)
    {
        $autores = new AutoresModel();
        $autores->delete($id);
        return redirect()->to(base_url('/autores'));
    }

    public function buscarAutor($id)
    {
        $autores = new AutoresModel();
        $datos['datos'] = $autores->where('artista_id', $id)->first();
        return view('form_editar_autor', $datos);
    }
}

<?php

namespace App\Controllers;
use App\Models\PaisesModel;

class PaisesController extends BaseController
{
    public function index(): string
    {
        $paises = new PaisesModel();
        $datos['datos'] = $paises->findAll();
        return view('paises', $datos);
    }

    public function agregarPais()
    {
        $paises = new PaisesModel();
        $datos = [
            'pais_id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre')
        ];
        $paises->insert($datos);
        return $this->index();
    }

    public function modificarPais()
    {
        $paises = new PaisesModel();
        $datos = [
            'pais_id'=>$this->request->getPost('txt_id'),
            'nombre'=>$this->request->getPost('txt_nombre')
        ];
        $paises->update($datos['pais_id'], $datos);
        return $this->index();
    }

    public function eliminarPais($id)
    {
        $paises = new PaisesModel();
        $paises->delete($id);
        return $this->index();
    }

    public function buscarPais($id)
    {
        $paises = new PaisesModel();
        $datos['datos'] = $paises->where('pais_id', $id)->first();
        return view('form_editar_pais', $datos);
    }
}

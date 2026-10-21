<?php

namespace App\Controllers\Api;

use CodeIgniter\RESTful\ResourceController;

class MueblesController extends ResourceController
{
    protected $format = 'json';

    public function index()
    {
        return $this->respond([
            'mensaje' => 'Api de muebles funcionando correctamente'
        ]);
    }

    public function show($id = null)
    {
        return $this->respond([
            'mensaje'  => 'Detalle del mueble',
            'id_mueble' => $id
        ]);
    }
}

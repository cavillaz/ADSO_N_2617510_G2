<?php
namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\API\ResponseTrait;
use App\Models\ParqueaderoModel;

class Parqueadero extends BaseController
{
    
    
    public function index()
    {
        $parqueadero = new ParqueaderoModel();
        $data['parqueadero'] = $parqueadero->orderBy('id_ubicacion')->findAll();
        return json_encode($data);
        
    }

}
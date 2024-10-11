<?php

namespace App\Models;

use CodeIgniter\Model;

class TorresModel extends Model
{
    protected $DBGroup          = "default";
    protected $table            = 'tb_torres';
    protected $primaryKey       = 'id_torres';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nombre_torre', 'numero_torre'];

   
    /* public function getDataProfile()
    {
        
        $query=$this->db->query('SELECT * FROM `parqueadero` WHERE 1;');
        $result=$query->getResult();
        return $result;  
    } */
}

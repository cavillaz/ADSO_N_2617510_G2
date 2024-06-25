<?php

namespace App\Models;

use CodeIgniter\Model;

class TorresModel extends Model
{
    protected $DBGroup          = "default";
    protected $table            = 'torres';
    protected $primaryKey       = 'torres_Id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['torres_nombre', 'torres_numero'];

   
    /* public function getDataProfile()
    {
        
        $query=$this->db->query('SELECT * FROM `parqueadero` WHERE 1;');
        $result=$query->getResult();
        return $result;  
    } */
}

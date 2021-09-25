<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomersModel extends Model
{
    protected $table = 'customers';
    protected $primaryKey = 'customerid';
    protected $allowedFields = ['name', 'address', 'city'];

    public function getCustomer($id = false) {
      if ($id == false) {
        return $this->findAll();
      } 

      return $this->where(['customerid' => $id])->first();
    }
}
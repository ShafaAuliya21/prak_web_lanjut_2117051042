<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Validation\StrictRules\Rules;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'user';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nama', 'npm', 'id_kelas'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    public function saveUser($data){
        $this->insert($data);
    }

    // Validation

    protected $validationRules  =[
        'npm' => [
            'rules' => 'required|min_length[10]|is_unique[user.npm]',
            'errors' => [
                'required' => '{field} wajib diisi!',
                'min_length' => '{field} minimal 10 karakter!',
                'is_unique' => '{field} tersebut sudah digunakan!'
            ]
        ],

        'nama' => [
            'rules' => 'required',
            'errors' => [
                'required' => '{field} wajib diisi!'
            ]
        ],

    ];

    public function getUser(){
        return $this->join('kelas', 'kelas.id=user.id_kelas')->findAll();
    }

}

<?php 
namespace App\Models;

use CodeIgniter\Model;

class Login_Model extends Model{
    
    protected $table      = 'usuarios';
    protected $returnType =User::class;
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id_usuario';
    protected $allwedFields=['usuario','password'];
    public function validar(string $colunm, string $value){
        return $this->where($colunm, $value)->first();
        
    }

}
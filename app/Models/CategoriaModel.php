<?php namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model {
    protected $table = 'categoria';//nome da tabela
    protected $primaryKey = 'idcategoria';
    protected $allowedFields = ['nomecategoria'];
    protected $returnType = 'object';
}

<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ComptesModel extends Model
{
    protected $table = 'compte';
 
    protected $allowedFields = ['type_compte','agence','numero_compte','cle_rib',
                                'frais_ouverture'];

}
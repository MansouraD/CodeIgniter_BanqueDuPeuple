<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientsEntreprisesModel extends Model
{
    protected $table = 'client_entreprise';
 
    protected $allowedFields = ['agence','numero_compte','cle_rib',
                                'frais_ouverture','id_clientE','id_clientP'];

}
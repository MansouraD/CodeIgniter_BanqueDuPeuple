  
<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientsEntreprisesModel extends Model
{
    protected $table = 'client_entreprise';
 
    protected $allowedFields = ['statut','denomination','ninea',
                                'adresse','telephone','mail'];

}
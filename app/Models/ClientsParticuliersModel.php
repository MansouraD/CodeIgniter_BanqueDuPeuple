<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientsParticuliersModel extends Model
{
    protected $table = 'client_particulier';
 
    protected $allowedFields = ['nom','prenom','date_de_naissance',
                                'cni','adresse','téléphone',
                                'email','profession','salaire'];

}
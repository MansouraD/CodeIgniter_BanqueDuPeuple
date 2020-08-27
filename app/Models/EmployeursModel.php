<?php
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class EmployeursModel extends Model
{
    protected $table = 'employeur';
 
    protected $allowedFields = ['numero_identification','raison_social','denomination',
                                'adresse'];

}
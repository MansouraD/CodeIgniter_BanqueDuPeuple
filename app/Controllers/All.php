<?php

namespace App\Controllers;

use App\Models\ClientsParticuliersModel;
use App\Models\ClientsEntreprisesModel;
use App\Models\ComptesModel;
use App\Models\EmployeursModel;
use CodeIgniter\Controller;

class All extends Controller
{

    public function index()
    {
    

        return view('index');
    }

    public function inserer()
    {
        helper(['form', 'url']);

        $cp = new ClientsParticuliersModel();
        $ce = new ClientsEntreprisesModel();
        $c = new ComptesModel();
        $e = new EmployeursModel();

        if (isset($_POST['soumettre'])) {
            if ($_POST['check1'] == 'Particulier') {
            
                $data1 = [
                    'nom' => $this->request->getVar('nom_client'),
                    'prenom' => $this->request->getVar('prenom_client'),
                    'date_de_naissance' => $this->request->getVar('datenaiss'),
                    'cni' => $this->request->getVar('cni'),
                    'adresse' => $this->request->getVar('adresse_client'),
                    'téléphone' => $this->request->getVar('tel_client'),
                    'email' => $this->request->getVar('email_client'),
                    'profession' => $this->request->getVar('profession'),
                    'statut' => $this->request->getVar('statut'),
                    'salaire' => $this->request->getVar('salaire'),

                ];

                $icp = $cp ->insert($data1);

                $data2 = [

                    'type_compte' => $this->request->getVar('type_compte'),
                    'agence' => $this->request->getVar('numero_agence'),
                    'numero_compte' => $this->request->getVar('numero_compte'),
                    'cle_rib' => $this->request->getVar('cle_rib'),
                    'frais_ouverture' => $this->request->getVar('frais_ouverture'),
    
                ];

                $ic = $c ->insert($data2);


                return redirect()->to(base_url('index'));

                if ($_POST['check3'] == 'salarie') {

                    $data3 = [

                        'type_compte' => $this->request->getVar('type_compte'),
                        'agence' => $this->request->getVar('numero_agence'),
                        'numero_compte' => $this->request->getVar('numero_compte'),
                        'cle_rib' => $this->request->getVar('cle_rib'),
                        'frais_ouverture' => $this->request->getVar('frais_ouverture'),
        
                    ];

                    ie = $e ->insert($data3);

                } return redirect()->to(base_url('index'));


            } else if ($_POST['check1'] == 'Entreprise') {
               
                $data4 = [

                    'statut' => $this->request->getVar('statut_juridique'),
                    'denomination' => $this->request->getVar('nom_entreprise'),
                    'ninea' => $this->request->getVar('ninea'),
                    'adresse' => $this->request->getVar('adresse_entreprise'),
                    'telephone' => $this->request->getVar('tel_entreprise'),
                    'mail' => $this->request->getVar('email_entreprise')
                  
                ];

                $ice = $ce->insert($data4);

                $data2 = [

                    'type_compte' => $this->request->getVar('type_compte'),
                    'agence' => $this->request->getVar('numero_agence'),
                    'numero_compte' => $this->request->getVar('numero_compte'),
                    'cle_rib' => $this->request->getVar('cle_rib'),
                    'frais_ouverture' => $this->request->getVar('frais_ouverture'),
    
                ];

                $ic = $c ->insert($data2);

                return redirect()->to(base_url('index'));
            }
        }
    }

    


   
}
<?php

class entreprises extends controller
{
    public function __construct()
    {
        $this->entreprisesModel = $this->model('entreprise');
    }
    public function index()
    {
        $affiche = $this->entreprisesModel->afficheposte();
        $data = [
            'affiche' => $affiche
        ];
        $this->view('entreprises/afficheproprietaire', $data);
    }

    
    public function ajoute()
    {
        if (!isLoggedIN()) {
            header("location:" . URLROOT . "/entreprises");
        }
        $data = [
            'nom' => "",
            'adresse' => "",
            'prenom_nom_repondtant' => "",
            'telel' => "",
            'niena' => "",
            'datecreation' => "",
            'nombreEnployer' => "",
            'organigrame' => "",
            'cautisationsocial' => "",
            'pqgeWep' => "",
            'nomError' => "",
            'adresseError' => "",
            'prenom_nom_repondtantError' => "",
            'telelError' => "",
            'nienaError' => "",
            'datecreationError' => "",
            'nombreEnployerError' => ""
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'user_id' => $_SESSION['user_id'],
                'nom' => trim($_POST['nom']),
                'adresse' => trim($_POST['adresse']),
                'prenom_nom_repondtant' => trim($_POST['prenom_nom_repondtant']),
                'telel' => trim($_POST['telel']),
                'niena' => trim($_POST['niena']),
                'datecreation' => trim($_POST['datecreation']),
                'nombreEnployer' => trim($_POST['nombreEnployer']),
                'organigrame' => trim($_POST['organigrame']),
                'cautisationsocial' => trim($_POST['cautisationsocial']),
                'pqgeWep' => trim($_POST['pqgeWep']),
                'nomError' => "",
                'adresseError' => "",
                'prenom_nom_repondtantError' => "",
                'telelError' => "",
                'nienaError' => "",
                'datecreationError' => "",
                'nombreEnployerError' => ""
            ];
            if(isset($_POST['organigrame'])){
                $data['organigrame'] = 1;
            }else{
                $data['organigrame'] = (int)0;
            }
            if(isset($_POST['cautisationsocial'])){
                $data['cautisationsocial'] = 1;
            }else{
                $data['cautisationsocial'] = (int)0;
            }
            if(isset($_POST['pqgeWep'])){
                $data['pqgeWep'] = 1;
            }else{
                $data['pqgeWep'] = (int)0;
            }
            if (empty($data["nom"])) {
                $data['nomError'] = "le non de  lentreprise ne dois pas etre  vide";
            }
            if (empty($data["adresse"])) {
                $data['adresseError'] = "l adresse  ne dois pas etre  vide";
            }
            if (empty($data["prenom_nom_repondtant"])) {
                $data['prenom_nom_repondtantError'] = "le non repondant ne dois pas etre  vide";
            }
            if (empty($data["telel"])) {
                $data['telelError'] = "le telephone repondant ne dois pas etre  vide";
            }
            if (empty($data["niena"])) {
                $data['nienaError'] = "le niena  ne dois pas etre  vide";
            }
            if (empty($data["datecreation"])) {
                $data['datecreationError'] = "le  chanps dates dois etre remplie";
            }
            if (empty($data["nombreEnployer"])) {
                $data['nombreEnployerError'] = "entrer le nombre de d employer";
            }

            // if (empty($data["nomError"]) && empty($data["adresseError"]) && empty($data["prenom_nom_repondtantError"]) && empty($data["telelError"]) && empty($data["nienaError"]) && empty($data["datecreation"]) && empty($data["nombreEnployer"])) {
            if ($this->entreprisesModel->ajoutentreprise($data)) {

                header("location:" . URLROOT . "/entreprises");
            } else {
                die('reaisyer plus tard');
            }
        } else {
            $this->view('entreprises/ajoute', $data);
        }
        // }
        $this->view('entreprises/ajoute', $data);
    }
    public function modifier($id)
    {
        $affiche = $this->entreprisesModel->findentrepriseById($id);

        $data = [
            'affiche' => $affiche,

            // 'nom' => "",
            // 'adresse' => "",
            // 'prenom_nom_repondtant' => "",
            // 'telel' => "",
            // 'niena' => "",
            // 'datecreation' => "",
            // 'nombreEnployer' => "",
            // 'organigrame' => "",
            // 'cautisationsocial' => "",
            // 'pqgeWep' => "",
            'nomError' => "",
            'adresseError' => "",
            'prenom_nom_repondtantError' => "",
            'telelError' => "",
            'nienaError' => "",
            'datecreationError' => "",
            'nombreEnployerError' => ""
        ];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'affiche' => $affiche,
                'nom' => trim($_POST['nom']),
                'adresse' => trim($_POST['adresse']),
                'prenom_nom_repondtant' => trim($_POST['prenom_nom_repondtant']),
                'telel' => trim($_POST['telel']),
                'niena' => trim($_POST['niena']),
                'datecreation' => trim($_POST['datecreation']),
                'nombreEnployer' => trim($_POST['nombreEnployer']),
                'organigrame' => trim($_POST['organigrame']),
                'cautisationsocial' => trim($_POST['cautisationsocial']),
                'pqgeWep' => trim($_POST['pqgeWep']),
                'nomError' => "",
                'adresseError' => "",
                'prenom_nom_repondtantError' => "",
                'telelError' => "",
                'nienaError' => "",
                'datecreationError' => "",
                'nombreEnployerError' => ""
            ];
            if (empty($data["nom"])) {
                $data['nomError'] = "le non de  lentreprise ne dois pas etre  vide";
            }
            if (empty($data["adresse"])) {
                $data['adresseError'] = "l adresse  ne dois pas etre  vide";
            }
            if (empty($data["prenom_nom_repondtant"])) {
                $data['prenom_nom_repondtantError'] = "le non repondant ne dois pas etre  vide";
            }
            if (empty($data["telel"])) {
                $data['telelError'] = "le telephone repondant ne dois pas etre  vide";
            }
            if (empty($data["niena"])) {
                $data['nienaError'] = "le niena  ne dois pas etre  vide";
            }
            if (empty($data["datecreation"])) {
                $data['datecreationError'] = "le  chanps dates dois etre remplie";
            }
            if (empty($data["nombreEnployer"])) {
                $data['nombreEnployerError'] = "entrer le nombre de d employer";
            }

            // if (empty($data["nomError"]) && empty($data["adresseError"]) && empty($data["prenom_nom_repondtantError"]) && empty($data["telelError"]) && empty($data["nienaError"]) && empty($data["datecreation"]) && empty($data["nombreEnployer"])) {
            if ($this->entreprisesModel->modifierentreprise($data)) {
      echo'leppp falaw';
                // header("location:" . URLROOT . "/entreprises");
            } else {
                die('reaisyer plus tard');
            }
        } else {
            $this->view('entreprises/modifier', $data);
        }
        // }
        $this->view('entreprises/modifier', $data);
    }
    public function suprimer($id)
    {
       $affiche = $this->entreprisesModel->findentrepriseById($id);
        $data = [
            'affiche' => $affiche,
            'nom' => "",
            'adresse' => "",
            'prenom_nom_repondtant' => "",
            'telel' => "",
            'niena' => "",
            'datecreation' => "",
            'nombreEnployer' => "",
            'organigrame' => "",
            'cautisationsocial' => "",
            'pqgeWep' => "",
            'nomError' => "",
            'adresseError' => "",
            'prenom_nom_repondtantError' => "",
            'telelError' => "",
            'nienaError' => "",
            'datecreationError' => "",
            'nombreEnployerError' => ""
        ];
        

         $affiche = $this->entreprisesModel->suprimerentreprise($id);

         header("location:" . URLROOT . "/entreprises");
  
}
}

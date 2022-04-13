<?php
class entreprise{
    private $db;
    public function __construct()
    {
        $this->db=new database;
       
}
public function afficheposte(){
    $this->db->query('SELECT * FROM entreprise ORDER BY datecreation ASC');
    $resultats= $this->db->resultSet();
    return $resultats;
}
public function ajoutentreprise($data){
    $this->db->query('INSERT INTO entreprise(nom,adresse,prenom_nom_repondtant,telel,niena,datecreation,nombreEnployer,organigrame,cautisationsocial,pqgeWep) VALUES
    (:nom,:adresse,:prenom_nom_repondtant,:telel,:niena,:datecreation,:nombreEnployer,:organigrame,:cautisationsocial,:pqgeWep) ');
    echo'slue';
    $this->db->bind(':nom', $data['nom']);
    $this->db->bind(':adresse',$data['adresse']);
    $this->db->bind(':prenom_nom_repondtant', $data['prenom_nom_repondtant']);
    $this->db->bind(':telel', $data['telel']);
    $this->db->bind(':niena', $data['niena']);
    $this->db->bind(':datecreation', $data['datecreation']);
    $this->db->bind(':nombreEnployer',$data['nombreEnployer']);
    $this->db->bind(':organigrame',$data['organigrame']);
    $this->db->bind(':cautisationsocial', $data['cautisationsocial']);
    $this->db->bind(':pqgeWep', $data['pqgeWep']);

   if ( $this->db->execute()) {
       return true; 
   }else{
       return false;
  }
}
public function findentrepriseById($id){
    $this->db->query('SELECT * FROM entreprise where id = :id');
    $this->db->bind(':id', $id);
    $row=$this->db->single();
    
    return $row;
}
public function modifierentreprise($data){
$this->db->query('UPDATE entreprise SET nom = :nom , adresse = :adresse , prenom_nom_repondtant = :prenom_nom_repondtant , telel = :telel , niena = :niena , datecreation = :datecreation , nombreEnployer = :nombreEnployer , organigrame = :organigrame , cautisationsocial = :cautisationsocial , pqgeWep=:pqgeWep where id = :id');
    $this->db->bind(':id',$data['affiche']->id);
    $this->db->bind(':nom',$data['nom']);
    $this->db->bind(':adresse',$data['adresse']);
    $this->db->bind(':prenom_nom_repondtant',$data['prenom_nom_repondtant']);
    $this->db->bind(':telel',$data['telel']);
    $this->db->bind(':niena',$data['niena']);
    $this->db->bind(':datecreation',$data['datecreation']);
    $this->db->bind(':nombreEnployer',$data['nombreEnployer']);
    $this->db->bind(':organigrame',$data['organigrame']);
    $this->db->bind(':cautisationsocial',$data['cautisationsocial']);
    $this->db->bind(':pqgeWep',$data['pqgeWep']);
    if ($this->db->execute()) {
        
          return true; 
    }else{
        return false;
   }
 

}

 public function suprimerentreprise($id)
 {
    $this->db->query('DELETE FROM entreprise where id = :id');
    $this->db->bind(':id', $id);

    if ($this->db->execute()) {
        
        return true; 
  }else{
      return false;
 }
 }
}

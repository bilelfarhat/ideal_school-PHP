<?php
class utilisateur
{
    //les attributs
   public $id;
   public $nom;
   public $prenom;
   public $date_naissance;
   public $phone;
   public $email;
   public $mot_passe; 
   //les contructeurs
   function_construct()
   {}
   function liste_utilisateur()
   {
    require_once('database.php');
    $cnx=new connexion();
    $pdo=$cnx->Cnx();
    $req="SELECT * FROM utilisateur";
    $res=$pdo->query($req);
    return $res;
   }
   function insert_utilisateur()
   {
    require_once("database.php");
    $cnx=new connexion();
    $pdo=$cnx->Cnx();
    $req="INSERT INTO utilisateur(id,nom,prenom,date_de_naissance,phone,email,types,mode_de_passe) VALUES($this->id,'$this->nom','$this->prenom','$this->date_naissance','$this->phone','$this->email','$this->types','$this->mode_passe')";
    $pdo->exec($req);   
   }
}
?>
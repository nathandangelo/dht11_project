<?php

use domain\Measure;

include "DaoBase.php";

class MesureDao extends DaoBase {

    public function __construct($config) {
        parent::__construct($config);
    }
    
    public function createMesure($mesureobjet) {
        
    $query = $this->bdd->prepare("INSERT INTO relevees (temperature, humidite) VALUES (:temperature,:humidite)");
    
    $query->bindParam(":temperature",$mesureobjet->temperature);
    
    $query->bindParam(":humidite",$mesureobjet->humidite);
    
    $query->execute();
    
    $id =$this->bdd->lastInsertId();
    
    $mesureobjet->id =$id;
    
    return $id;
    
    }
    
    public function readmesurebyid($id) {
        
        $result;
        
        $query = $this->bdd->prepare("SELECT temperature, humidite FROM relevees where id = :id");
        
        $query->bindParam(":id", $id);
        
        if ($query->execute()) {
            
            if ($donnees = $query->fetch()) {
                
                $temperature = $donnees["temperature"];
                $humidite = $donnees["humidite"];
                
                $result = new Measure($temperature, $humidite);
            }
        }
        
        return $result;
    }
    

       public function deletemesure($id) {
        
        $query = $this->bdd->prepare("DELETE FROM relevees WHERE id = :id");
        
        $query->bindParam(":id", $id);
        
        $query->execute();
    }
    
    public function updatemesure($mesure, $id) {
        
  
        $query = $this->bdd->prepare("UPDATE relevees SET temperature = :temperature, humidite = :humidite WHERE id = :id");
        
        $query->bindParam(":temperature", $mesure->temperature);
        
        $query->bindParam(":humidite", $mesure->humidite);
        
        $query->bindParam(":id", $id);
        
        $query->execute();
    }
}
<?php
namespace domain;

class Measure

{
    public $id;
    
    public $temperature;
    
    public $humidite;
    
    public $datetime;
    
    public function __construct($id,$temperature,$humidite)
    
    {
        $this->id = $id;
        $this->temperature = $temperature;
        $this->humidite = $humidite;
        
        
    }
    
}
?>
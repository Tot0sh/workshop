<?php
class Contributor {
    private $firstname = null, 
            $lastname = null,
            $speciality = null;
     
    public function __construct($firstname, $lastname, $speciality) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->speciality = $speciality;
    }

    public function __get($property)  
    {  
        if (property_exists($this, $property)) {  
            return $this->$property;  
        }  
    }  

    public function __set($property, $value)  
    {  
        if (property_exists($this, $property)) {  
            $this->$property = $value;  
        }  
    }
}
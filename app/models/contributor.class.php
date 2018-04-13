<?php
class Contributor {
    private $id = null,
            $firstname = null,
            $lastname = null,
            $speciality = null;
     
    public function __construct($id, $firstname, $lastname, $speciality) {
        $this->id = $id;
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
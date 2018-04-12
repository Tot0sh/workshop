<?php
class Contributor {
    private $firstname = null, 
            $lastname = null,
            $password = null,
            $speciality = null;
     
    public function __construct($firstname, $lastname, $password, $speciality) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
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
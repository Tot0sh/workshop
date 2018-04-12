<?php
class Manager {
    private $firstname = null, 
            $lastname = null,
            $password = null;
     
    public function __construct($firstname, $lastname, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
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
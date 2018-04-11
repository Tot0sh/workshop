<?php
class User {
    private $firstname = null, 
            $lastname = null,
            $email = null,
            $password = null,
            $type = null;
     
    public function __construct($firstname, $lastname, $email, $password, $type) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
        $this->type = $type;
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
<?php
class Student {
    private $firstname = null, 
            $lastname = null,
            $school = null,
            $year = null,
            $group = null;
     
    public function __construct($firstname, $lastname, $school, $year, $group) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->school = $school;
        $this->year = $year;
        $this->group = $group;
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
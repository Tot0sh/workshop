<?php
class Student {
    private $id = null,
            $firstname = null, 
            $lastname = null,
            $school = null,
            $year = null,
            $group = null;
     
    public function __construct($id, $firstname, $lastname, $school, $year, $group) {
        $this->id = $id;
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
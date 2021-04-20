<?php
namespace firstEmployer;
class Employer{
    protected $name;
    public $email;
    public function setName($name){
       $this->name=$name;
    }
    public function getName(){
       return $this->name;
    }
 }


?>
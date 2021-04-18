<?php

// class car{
//   // access modifier
//   private $color;
//   public $model;
//   public $manufacturer;
//   function __construct($carColor,$carModal,$carManufacturer){
//     $this->color=$carColor;
//     $this->model=$carModal;
//     $this->manufacturer=$carManufacturer;
//   }
//   function getColor(){
//     return $this->color;
//   }
// }
// $sayedCar=new car('red','2017','china');
// $sayedCar->color='black';
// $ahmedCar=new car('blue','2019','china');
// var_dump($sayedCar->getColor());
// var_dump($ahmedCar);


class Employer{
  public $name;
  public $email;
  private $salary;
  function __construct($employerName,$employerEmail)
  {
    $this->name=$employerName;
    $this->email=$employerEmail;
  }
  function setSalary($employerSalary){
    $this->salary=$employerSalary+500;
  }
  function getSalary(){
   return $this->salary;
  }
  function getName(){
    return $this->name;
   }
}
class marketingEmployers {
  const  department='marketing';
}
class salesEmployers extends marketingEmployers{
  const department='sales';
  static function getDepartment(){
    return parent::department;
   }
}

$yousef=new salesEmployers('mohamed','mohamed@gmail.com');
var_dump(salesEmployers::getDepartment());












 
?>
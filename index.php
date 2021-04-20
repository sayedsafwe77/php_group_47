<?php
//    interface Employers{
//        public function getName();
//        public function getSalary();
//        public function setSalary($s);
//    }
//     final class Employer{
//       public $name;
//       public $email;
//       public $gender;
//       public $salary;
//       public function __construct($x,$y,$z){
//          $this->name=$x;
//          $this->email=$y;
//          $this->gender=$z;
//       }
//       public function getName(){
//          return $this->name;
//       }
//       public function getSalary(){
//          return $this->salary;
//       }
//        public function setSalary($s){
//          $this->salary=$s;
//       }
//    }
//    class marketing implements Employers{
//       public $department;
//       public function __construct($x,$y,$z,$dep){
//          $this->department=$dep;
//       }
//       public function setSalary($s){
//          $this->salary=$s+1000;
//       }
//       public function setName($s){
//          $this->salary=$s+1000;
//       }
//       public function getName(){
//         return $this->name;
//       }
//       public function getSalary(){
//         return $this->salary;
//       }
//    }
//    class sales implements Employers{
//       public $department;
//       public function __construct($x,$y,$z,$dep){
//          $this->department=$dep;
//       }
//       public function setSalary($s){
//          $this->salary=$s+1000;
//       }
//       public function setName($s){
//          $this->salary=$s+1000;
//       }
//       public function getName(){
//         return $this->name;
//       }
//       public function getSalary(){
//         return $this->salary;
//       }
//    }
// $mostafa=new sales('mostafa','mostafa@gmail.com','male','marketing');
// $mostafa->setSalary(4000);

// $ahmed=new Employer('mostafa','mostafa@gmail.com','male');
// var_dump($ahmed);

namespace secondemployer;
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
trait printMyName{
   public $newTrait;
   public function printName($name){
      echo 'welcome '.$name;
   }
   public function printEmail($email){
      echo 'your email is '.$email;
   }
}
class sales{
   protected $name;
   public $email;
   public function setName($name){
      $this->name=$name;
   }
   public function getName(){
      return $this->name;
   }
}
class managers extends Employer{
   use printMyName;
}
$mostafa=new managers();
// $mostafa->printEmail('mostafa@gmail.com');
$mostafa->newTrait='new';
var_dump($mostafa->newTrait);
// var_dump($mostafa->getName());

















?>
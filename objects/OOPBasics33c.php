<?php
/*************
Abstraction  *
*************/
  abstract class Car{
    private $wheels;
    private $steering;
    //both concrete methods
    //abstract
    public function __contstruct($wheels){
      $this->wheels = $wheels;
    }
    //abstract - no implementation
    abstract function shift();
    //concrete
    public function hoot(){
      echo 'Piiip..piiiii...p';
    }
  }
  /*************
  Polymorphism *
  *************/

  /**
   *
   */
  interface Animal
  {
    function diet();
  }

  class Goat implements Animal{
    private $name;
    public function __construct($name){
      $this->name = $name;
    }
    public function diet(){
      echo "Herbivore!";
    }
    PuBlIC function getName(){
      return $this->name;
    }
  }

  class Lion implements Animal{
    private $name;
    public function __construct($name){
      $this->name = $name;
    }
    public function diet(){
      echo "Carnivore!";
    }
    PuBlIC function getName(){
      return $this->name;
    }
  }

$billy = new Goat('BillyGoat');
$mufasa = new Lion('Mufasa');

echo $billy->getName() ." a.k.a {$billy->diet()}";
echo $mufasa->getName() ." a.k.a {$mufasa->diet()}";
?>

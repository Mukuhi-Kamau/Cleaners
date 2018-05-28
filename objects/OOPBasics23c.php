<?php
//inheritance
//parent class
//reusing all properties and
//behavior in the child classes
class Animal{
  //characteristics/properties/attributes
  private $heart;

  public function __construct($heart){
    $this->heart = $heart;
    echo "{$heart}";
  }
  //behaviour
  public function move($direction,$form){
    echo "This is how I roll {$direction} ==> {$form}";
  }
}

class Dog extends Animal{
  private $name;
  public function __construct($name){
    $this->name = $name;
    //@How do you call the parent class?
  }
  //barking
}

$rex = new Dog('Rex');
$simba = new Dog('Simba');

$rex->move('Forward',"On two's");
echo '<br/>';
$simba->move('Backward','On all fours')

 ?>

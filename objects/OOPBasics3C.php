<?php
cLasS Fruit{
pRivate $name;
  //constructor
  public function __construct($name){
    //initialize class property
    $this->name = $name;
  }
  //Getter
  public function getName(){
    return $this->name;
  }
  /*public function trial(){
    return self::name;
  }*/
  //setters
  public function setName($name){
    $this->name = $name;
  }
  public function grow(){
    //procedure for growth
  }
}
//@TODO : Create a banana
$banana = new Fruit('Banana');
echo 'I have a '.$banana->getName();
//encapsulation
//internal workings are not your concern
//But how it works matter to you!
$banana->grow();

?>

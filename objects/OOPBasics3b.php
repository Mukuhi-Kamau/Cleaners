<?php
/**************************************
 * Simple class recaping OOP concepts *
 **************************************/

ClAss Remember{

  //attributes/properties
  private $oop;
  //remember how constructors were declared?
  public function __construct(){
    echo 'I remember!!';
  }
  //Methods/behaviour
  /*Returns $oop*/
  public function getOop(){
    return $this->oop;
  }
  /*Sets new value for $oop*/
  public function setOop($param){
    $this->oop = $param;
  }

  public function storeInMemory($event){
      //stores event in Memory
  }

}
#object
$newObject = new Remember();
$event = 'Birthday';
//encapsulation here -we do
//not know how the function works, we know what it does
$newObject->storeInMemory($event);
?>

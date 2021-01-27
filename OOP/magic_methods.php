<?php

class MyClass {

private $ID;

private function setID($ID) {
  $this->ID = $ID;
}

private function getID() {
  return $this->ID;
}


public function __set($name,$value) {
  switch($name) { //this is kind of silly example, bt shows the idea
    case 'ID': 
      return $this->setID($value);
    default:
      return $this->$name = $value;
  }
}

public function __get($name) {
  switch($name) {
    case 'ID': 
      return $this->getID();
    default:
    return $this->$name;
  }
}

}

$object = new MyClass();
$object->ID = 'foo'; //setID('foo') will be called

$object->name= 'rajesh';

echo $object->ID;

echo $object->name;
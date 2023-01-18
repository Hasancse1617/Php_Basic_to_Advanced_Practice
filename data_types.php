<?php
  $s = "Hello Hasan Ali";
  var_dump($s); //String data type
  $x = 33;
  var_dump($x); //Integer type data
  $y = 33.33;
  var_dump($y); //Float type data
  $b = true;
  var_dump($b); //Boolean type data
  $arr = array("Hasan","Humaira","Hasib");
  var_dump($arr); //Array type data
  class Car{
    public $color;
    public $model;
    public function __construct($color,$model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  $myCar = new Car("red","Volvo");
//   echo $myCar->message();
  var_dump($myCar); // Object data type
  $n=NULL;
  var_dump($n);//Null data type
?>
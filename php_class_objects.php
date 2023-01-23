<?php
    class Fruit{
       //properties
       public $name;
       public $color;
       public function set_name_color($name,$color){
         $this->name = $name;
         $this->color = $color;
       }
       public function get_name()
       {
          return "Fruit is ".$this->name." & Color is ".$this->color;
       } 
    }
    $mango = new Fruit();
    $mango->set_name_color("Mango","Red");
    echo $mango->get_name();
?>
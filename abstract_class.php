<?php
    abstract class Customer{
        public $name;
        public function __construct($name) {
            $this->name = $name;
        }
        public abstract function calculate($salary);
    }

    class PartTimeCustomer extends Customer{
        public function calculate($salary){
            return $this->name." salary is = " .$salary*3;
        }
    }

    class FullTimeCustomer extends Customer{
        public function calculate($salary){
            return $this->name." salary is = " .$salary*5;
        }
    }

    $partTime = new PartTimeCustomer("Hasan");
    $fullTime = new FullTimeCustomer("Habib");
    echo $partTime->calculate(5000); 
    echo "\n";
    echo $fullTime->calculate(10000);

?>
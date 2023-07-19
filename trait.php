<?php

    trait Food{
        public function eat($food){
            return $food;
        }
    }

    trait Car{
        public function vehicle($car){
            return $car;
        }
    }

    class Man{
        use Food, Car;
    }

    $man = new Man();
    echo $man->eat("Rice");
    echo "\n";
    echo $man->vehicle("BMW");
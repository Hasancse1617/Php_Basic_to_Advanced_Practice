<?php
    interface Car{
        public function bio($name, $color);
    }

    class Audi implements Car{
        public function bio($name, $color){
            return $name." color is = ".$color;
        }
    }

    class BMW implements Car{
        public function bio($name, $color){
            return $name." color is = ".$color;
        }
    }

    $audi = new Audi();
    echo $audi->bio("Audi","Red");
    echo "\n";
    $bmw = new BMW();
    echo $bmw->bio("BMW","Black");

?>
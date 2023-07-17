<?php
    //run time polymorphism
    interface Shape{
        public function area();
    }

    class Circle implements Shape{
        private $radius;
        public function __construct($radius){
            $this->radius = $radius;
        }
        public function area(){
            return $this->radius*$this->radius*pi();
        }
    }

    class Rectangle implements Shape{
        private $height;
        private $width;
        public function __construct($height, $width){
            $this->height = $height;
            $this->width = $width;
        }
        public function area(){
            return $this->height*$this->width;
        }
    }

    $circle = new Circle(8,5);
    echo $circle->area();
    echo "\n";
    $rectangle = new Rectangle(3,4);
    echo $rectangle->area();
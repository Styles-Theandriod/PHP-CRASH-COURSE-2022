<?php
    class Car{
        public $color;
        public $model;
        public $language;

        public function __construct($color, $model, $language){
            $this->color = $color;
            $this->model = $model;
            $this->language = $language;
        }

        public function message(){
            echo "My car is a " . $this->color . " " . $this->model . " " . $this->language;
        }

    }

    $myCar = new Car("black", "Volvo", "igbo");
    $house = new Car("black", "Volvo", "igbo");

    echo $myCar -> message();
<?php
class Car{
    public function start($var){
        $this->$var();
    }
    public function drive(){
        echo "car is driving";
    }
}
$car=new Car;
$car->start("drive");
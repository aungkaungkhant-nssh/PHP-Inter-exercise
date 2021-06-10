<?php
namespace App;

use App\Gen\Rule;

class Marcity implements Rule{
    public function price(){
        echo "1000";
    }
    public function year(){
        echo "2021";
    }
    public function speed()
    {
        echo "1hour";
    }
}
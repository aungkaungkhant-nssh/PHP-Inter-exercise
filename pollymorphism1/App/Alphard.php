<?php

namespace App;

use App\Gen\Rule;

class Alphard implements Rule{
    public function price(){
        echo "500";
    }
    public function year(){
        echo "2023";
    }
    public function speed()
    {
        echo "2hour";
    }
}
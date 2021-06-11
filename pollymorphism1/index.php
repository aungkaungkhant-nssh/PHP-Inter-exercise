<?php
include("./vendor/autoload.php");
use App\Alphard;
use App\Gen\Rule;
use App\Marcity;
class Detail{
    public function __construct()
    {
        $alphard=new Alphard();
        // $alphard->price();
        $marcity=new Marcity();
        // $marcity->price();
        $this->getYear($alphard);
        $this->getYear($marcity);
    }
    public function getYear(Rule $rule){
        $yr=$rule->year();
        echo $yr;
    }
}
$detail=new Detail();

<?php
include("./vendor/autoload.php");
use App\Alphard;
use App\Marcity;
class Detail{
    public function __construct()
    {
        $alphard=new Alphard();
        $alphard->price();
        $marcity=new Marcity();
        $marcity->price();
    }
}
$detail=new Detail();

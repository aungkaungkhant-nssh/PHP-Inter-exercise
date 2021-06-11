<?php

class Math{
    public static $count=0;
    public function incre(){
        self::$count++;
        echo self::$count;
    }   
}
$math=new Math;
$math->incre();
$math->incre();
<?php

class Math{
    public static $count=0; //<- သူ က pc ရဲ့ memory အသစ္ တစ္ ခု အ ေန နဲ့ ေန ရာယူတယိ
    // public $count=0;<- သူ က  class ကို မီ  ခို ေန တယိ
    public function incre(){
        self::$count++;
        echo self::$count;
    }   
}
$math=new Math;
$math->incre();
$math->incre();
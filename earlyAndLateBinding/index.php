<?php

class One{
    public static $name="aungkaungkhant";
    public function getName(){
        // echo self::$name; <- thu ka early binding
        echo static::$name;//<- thu ka late binding
    }
}
class Two extends One{
    public static $name="nansusanhtike";

    
}
$two=new Two;
$two->getName();
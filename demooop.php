<?php
class Number{
//    Thuộc tính
    public $numberA=1;
    public $numberB=2;
//    Phương thức
    function totalNumber($a,$b){
        return $a+$b;
    }
}

    $object= new Number();
    var_dump($object);
    $total=$object->totalNumber($object->numberA,$object->numberB);
    echo $total;
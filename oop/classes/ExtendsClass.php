<?php
require "Calculator.php";
    class ExtendsClass extends Calculator{
        protected $numberC='haha';
        public function numberC(){
            return $this->numberC;
        }
    }

    $obj= new ExtendsClass();
    echo $obj->numberC();
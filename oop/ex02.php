<?php
require "classes/Calculator.php";
$calc= new Calculator;
////var_dump($calc);
//echo $calc->makeAdd(1,2);
//echo Calculator::makeAdd(1,2);

//echo $calc->demoThis(); lỗi
//var_dump($calc->demoThis());

$calc->setNumberA(5);
$calc->setNumberB(0);
echo $calc->makeAdd();
//property_exists()
//method_exists()
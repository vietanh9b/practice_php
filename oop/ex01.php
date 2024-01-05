<?php
/*
 * Tạo 1 class Calculator để tính toàn:
 * + plus
 * + Minus
 * + multiply
 * + divide
 *  */
    class Calculator{
//      var tương đương với public
        var $numberA=1,$numberB=0;
//      Khai báo hằng số
        const _MSG_CONTENT='kết quả là :{value}';
//      Khai báo phương thức
        function makeAdd($a,$b){
            $result=$a+$b;
            return $result;
        }
        public function makeMinus($a,$b){
            $result=$a-$b;
            return $result;
        }

        public function makeMultiply($a,$b){
            $result=$a*$b;
            return $result;
        }

        public function makeDivide($a,$b){
            if($b==0){
                return 'Không chia cho số 0<br>';
            }
            $result=$a/$b;
            return $result;
        }

        public function showResult($value){
            return str_replace('{value}',$value,$this::_MSG_CONTENT);

        }
    }

    $object= new Calculator();
    $object_valueA=$object->numberA;
    $object_valueB=$object->numberB;
    $object_content=Calculator::_MSG_CONTENT;
    //cách gọi hàng số obj::hang_so
    //cách gọi hàng số class::hang_so
    echo $object->makeAdd($object_valueA,$object_valueB).'<br>';
    echo $object->makeMinus($object_valueA,$object_valueB).'<br>';
    echo $object->makeMultiply($object_valueA,$object_valueB).'<br>';
    echo $object->makeDivide($object_valueA,$object_valueB);
    echo $object->showResult(1);
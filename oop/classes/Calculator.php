<?php
class Calculator{
//      var tương đương với public
//    var $numberA,$numberB;
//      Khai báo hằng số
    const _MSG_CONTENT='kết quả của phép {operator} hai số {numberA} và {numberB}:{value}';
//      Khai báo phương thức

    private $numberA,$numberB;

    protected $numberC=1;

// truyền giá trị vào number a,b
    public function setNumberA($a){
        $this->numberA=$a;
    }

    public function setNumberB($b){
        $this->numberB=$b;
    }

//    lấy giá trị từ numberA và numberB
    public function getNumberA(){
        return $this->numberA;
    }

    public function getNumberB(){
        return $this->numberB;
    }

    public function makeAdd(){
        return $this->getNumberA()+$this->getNumberB();
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

    public function showResult($operator,$a,$b,$value){
        $arrReplace=[$operator,$a,$b,$value];
        $arrReplaceOld=['{operator}', '{numberA}','{numberB}','{value}'];
        $final=str_replace($arrReplaceOld,$arrReplace,self::_MSG_CONTENT);
        return $final;
    }
    public function finalResult($operator,$a,$b){
        $this->setNumberA($a);$this->setNumberB($b);
        switch ($operator){
            case '+':
                $value=$this->makeAdd($this->getNumberA(),$this->getNumberB());
                break;
            case '-':
                $value=$this->makeMinus($this->getNumberA(),$this->getNumberB());
                break;
            case '*':
                $value=$this->makeMultiply($this->getNumberA(),$this->getNumberB());
                break;
            case '/':
                $value=$this->makeDivide($this->getNumberA(),$this->getNumberB());
                break;
        }
        return $this->showResult($operator,$a,$b,$value);
    }
//    public function __construct()
//    {
//        echo 'hàm tạo';
//    }
//
//    public function __destruct()
//    {
//        // TODO: Implement __destruct() method.
//        echo 'hàm hủy';
//    }
}

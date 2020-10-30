<?php
class Calc {
    private $n;
    private $sum;

    function __construct($n){
        $this->n = $n-1;
        $this->sum = 0;
    }
    public function setN($n){
        $this->n = $n;
    }
    public function getN(){
        return $this->n;
    }

    public function setSum($n){
        $this->sum += $n;
    }
    public function getSum(){
        return $this->sum;
    }
   
    public function calcNumber(){
        if($this->getN() == 0){

        }else{
            if($this->getN() % 3 == 0 || $this->getN() % 5 == 0){
                $this->setSum($this->getN());
            }
            $this->setN($this->getN()-1);
            $this->calcNumber();
        }
        return $this->getSum();
    }
}

?>
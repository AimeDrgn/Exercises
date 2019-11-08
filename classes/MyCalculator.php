<?php


class MyCalculator {

    private $x,
        $y;
    public function __construct(ComplexNumber $x, ComplexNumber $y) {
        $this->x = $x;
        $this->y = $y;
    }
    public function sum(){
        return ($this->x->getNumber() + $this->y->getNumber()) . ',' . ($this->x->getNumberImaginary() + $this->y->getNumberImaginary()) . 'i';
    }
    public function difference(){
        return ($this->x->getNumber() - $this->y->getNumber()) . ',' . ($this->x->getNumberImaginary() - $this->y->getNumberImaginary()) . 'i';
    }
    public function multiply() {
        return ($this->x->getNumber() * $this->y->getNumber()) . ',' . ($this->x->getNumberImaginary() * $this->y->getNumberImaginary()) . 'i';
    }
    public function division() {
        return ($this->x->getNumber() / $this->y->getNumber()) . ',' . ($this->x->getNumberImaginary() / $this->y->getNumberImaginary()) . 'i';
    }

    public function module(){
        return ($this->x->getNumber() % $this->y->getNumber()) . ',' . ($this->x->getNumberImaginary() % $this->y->getNumberImaginary()) . 'i';
    }
}


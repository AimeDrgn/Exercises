<?php


class ComplexNumber
{
private $real;
private $imaginary;

public function getNumberImaginary():float{
   return $this->imaginary;
}

public function setNumberImaginary(float $imaginary){
 $this->imaginary = $imaginary;
 return $this;
}

public function getNumber():float {
    return $this->real;
}

public function setRealNumber(float $real){
    $this->real = $real;
    return $this;
}

public function __construct($real,$imaginary)
{
$this->setRealNumber($real);
$this->setNumberImaginary($imaginary);
}


}
<?php


//include("./ComplexNumber.php");
//include("./MyCalculator.php");
//
//$object1 = new ComplexNumber(16,21);
//$object2 = new ComplexNumber(8,32);
//$result = new MyCalculator($object1,$object2);
//
//echo $result->sum() . "\r\n";
//echo $result->difference() . "\r\n";
//echo $result->module() . "\r\n";
//echo $result->multiply() . "\r\n";
//echo $result->division() . "\r\n";

include("./Calculator.php");
$calc = new Calculator();

Calculator::sum(5);

echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::sum(10);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::substract(3);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::setValue(1020);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::divide(8);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::multiply(6);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::modulo(13);
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";

Calculator::clear();
echo "Valoarea lui Value este: " . Calculator::getValue();
echo "<br />\n";



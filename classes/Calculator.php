<?php


class Calculator
{
    public static $value = 0;


    public static function sum(int $x) {

        self::$value += $x;
    }

    public static function substract(int $x){

        self::$value -=$x;
    }


    public static function multiply(int $x){

        self::$value *= $x;
    }

    public static function divide(int $x){

        self::$value /= $x;
    }

    public static function modulo(int $x){

        self::$value %= $x;
    }

    public static function square(){

        self::$value *= $value;
    }

    public static function getValue():int{

        return static::$value;
    }

    public static function setValue(int $x){
        self::$value=$x;
    }
    public static function clear():void{
        self::$value=0;
    }

}






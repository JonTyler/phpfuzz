<?php
namespace fizzBuzz;
/**
 * Created by PhpStorm.
 * User: Dad
 * Date: 2017-04-24
 * Time: 6:51 PM
 * generates an array of 100 numbers, and prints fizz if they're divisible by 3, Buzz if by 5, fizzbuzz if by both,
 * or the number if it's neither.
 */
class fizzbuzz
{
    //holds all numbers
    private $numbersArray = array();
    //max allowed array size
    private const MAX_SIZE = 100;
    /**
     * fizzbuzz constructor - fills array
     */
    public function __construct()
    {
        for($i = 1; $i <= $this::MAX_SIZE; $i++)
        {
            array_push($this->numbersArray, $i);
        }
    }

    public function FizzBuzz(){
        foreach($this->numbersArray AS $entry){
            //the actual thing
            switch ($entry){
                //if both remainders are met, do this
                case $entry%3 == 0 && $entry%5 == 0 :
                    echo "FizzBuzz <br>";
                    break;
                //if only div by 3, fizz
                case $entry%3 == 0 :
                    echo "Fizz <br>";
                    break;
                //if only div by 5, buzz
                case $entry%5 == 0 :
                    echo "Buzz <br>";
                    break;
                //just do the number
                default:
                    echo $entry . "<br>";
            }
        }
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: Dad
 * Date: 2017-04-24
 * Time: 6:49 PM
 */
namespace fizzBuzz;
require_once "classes/fizzbuzz.php";
echo "Welcome to fizzbuzz generator, presented by yetibot. <br>";
$fuzz = new fizzbuzz();
try{
    $fuzz->FizzBuzz();
}
catch (\Exception $e){
    echo $e->getMessage();
}
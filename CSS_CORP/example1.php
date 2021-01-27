<?php

Class arrayUtls{

    var $inputArray;

    public function __construct(Array $inputArray) {
        $this->inputArray = $inputArray;
    }

    public function findMissingNumbers() :string {
        $NewArray = range($this-> getMinVal(), $this-> getMaxVal());
        $missingArray = array_diff($NewArray, $this->inputArray);
        return implode(",", $missingArray);
    }

    public function getMaxVal(){
        return max($this->inputArray);
    }

    public function getMinVal(){
        return min($this->inputArray);
    }

}

$input_array1 = array(1,4,6,7,10);
$input_array2 = array(33, 20, 63, 5, 42, 84, 4, 8, 74, 15, 7, 90, 57, 36, 24, 27, 70, 100, 78, 46, 65, 43, 28, 93, 77, 81, 89, 88, 52, 21, 64, 67, 40, 41, 56, 34, 13, 59, 31, 35, 6, 62, 29, 87, 47, 10, 68, 76, 48, 55, 92, 37, 75, 71, 69, 58, 17, 45, 72, 3, 25, 30, 23, 85, 53, 66, 94, 26, 9, 61, 95, 60, 50, 54, 97, 11, 91, 22, 39, 18, 44, 1, 96, 99, 2, 73, 79, 49, 98, 12, 51, 86, 19, 14, 16, 32, 80, 82);


$arrayHelper1 = new arrayUtls($input_array1);
$arrayHelper2 = new arrayUtls($input_array2);

//print_r($arrayHelper1->findMissingNumbers());
//echo "<hr>";
print_r($arrayHelper2->findMissingNumbers());


?>
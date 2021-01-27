<?php

Class CombinationProvider {
    var $inputArray;
    var $limit;
    var $combinations;
   

    public function __construct(array $inputArray, int $limit) {
        $this->combinations = $inputArray;
        $this->inputArray = $inputArray;
        $this->limit = $limit;
    }

    public function getCombination(){

        if ($this->limit === 1) {
            return $this->combinations;
        }

        $new_combinations = [];
        foreach ($this->combinations as $combination) {
            foreach ($this->inputArray as $input) {
                $new_combinations[] = $combination .",". $input;
            }
        }

        $this->combinations = $new_combinations;
        $this->limit--;
        return $this->getCombination();
    }
}

class Pythagorean {
    public $commbinationProvider;
    public function __construct(CombinationProvider $commbinationProvider) {
        $this->commbinationProvider = $commbinationProvider;
    }

    public function getValidResults(){

        $result = [];
        $result['valid_combination']['data'] = [];
        $combinations = $this->commbinationProvider->getCombination();
        if (is_array($combinations)) {
            foreach ($combinations as $key => $combination) {
                $combination_arr = explode(",", $combination);
                    if (count($combination_arr)) {
                    $a = $combination_arr[0];
                    $b = $combination_arr[1];
                    $c = $combination_arr[2];
                    if (!($a == $b && $b == $c)
                        && $this->isPassingFormula($a, $b, $c)) {
                        
                        // $result[] = ['A' => $a, 'B' => $c, 'C' => $c];
                        $result['valid_combination']['data'][] = $a . ", " . $b . ", ". $c;
                        // $result[] = $combination;
                    }
                } else {
                    $result['error'][] = 'Not enough variable - '.$combination;
                }
            }      
        } else {
            $result['Message'] = "Empty set of array from commbinationProvider ...";
        }
        return $result;
    }

    private function isPassingFormula($a, $b, $c){
        $power = 2;
        if (round(Pow($a, $power) + pow($b, $power)) === round(pow($c, $power))){
            return true;
        }
        return false;
     }

}

define("MYLIMIT", 3);
$input1 = array(8, 5, 3, 9, 6, 4);
$input2 = array(2, 5, 12, 3, 6);
$input3 = array(12, 15, 19.21, 100);
$combinationProvider3 =  new CombinationProvider($input3, MYLIMIT);
$combinationProvider2 =  new CombinationProvider($input2, MYLIMIT);
$combinationProvider1 =  new CombinationProvider($input1, MYLIMIT);
$Myformula1 = new Pythagorean($combinationProvider1);
$Myformula2 = new Pythagorean($combinationProvider2);
$Myformula3 = new Pythagorean($combinationProvider3);
print_r($Myformula1->getValidResults());
echo "<hr>";
print_r($Myformula2->getValidResults());
//echo "<hr>";
//print_r($Myformula3->getValidResults());

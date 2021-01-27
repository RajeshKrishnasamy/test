<?php
function sampling($chars, $size, $combinations = array()) {

# if it's the first iteration, the first set 
# of combinations is the same as the set of characters
if (empty($combinations)) {
    $combinations = $chars;
}

# we're done if we're at size 1
if ($size === 1) {
    return $combinations;
}

# initialise array to put new values in
$new_combinations = array();

# loop through existing combinations and character set to create strings
foreach ($combinations as $combination) {
    foreach ($chars as $char) {
        $new_combinations[] = $combination . $char;
    }
}

# call same function again for the next iteration
return sampling($chars, $size - 1, $new_combinations);

}

function IsValidPythagoreanSet($abc){

    $power = 2;
    $a_b_c = str_split($abc);
    //print_r ($a_b_c);
    $a = $a_b_c[0];
    $b = $a_b_c[1];
    $c = $a_b_c[2];


    if (!($a === $b && $b === $c) 
        && Pow($a, $power) + pow($b, $power) === pow($c, $power)) {
        echo "Valid Set - ". $a . ", " . $b . ", ". $c;
    }

}


// example
$chars = array(8, 5, 3,9, 6, 4);
$output = sampling($chars, 3);
print_r($output);

foreach($output as $key => $val){
    IsValidPythagoreanSet($val);
}

echo "<pre>";
//echo count($output);
//print_r($output);
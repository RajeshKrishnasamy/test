<?php   
// PHP code to get the Fibonacci series 
// Recursive function for fibonacci series. 
function Fibonacci($number){ 
      
    // if and else if to generate first two numbers 
    if ($number == 0) {
        return 0;     
    } else if ($number == 1) {
        return 1;     
      
    // Recursive Call to get the upcoming numbers 
    } else {
        echo "<br>calling===>";
        echo $number-1;
        echo "<==>";
        echo $number-2;

        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
    }
} 
  
// Driver Code 
$number = 20; 
for ($counter = 0; $counter < $number; $counter++){   
    echo "<br><b>".Fibonacci($counter),'</b> '; 
} 


// PHP code to get the Fibonacci series 
function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 
  
// Driver Code 
$n = 10; 
Fibonacci($n); 

?> 
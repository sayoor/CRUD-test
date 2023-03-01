<?php
function fizzbuzz ($number){
    if ($number %3 == 0 && $number %5 == 0){
        echo "Fizzbuzz \n";
    }
    else if ($number %3 ==0){
        echo "Fizz \n";
    }
    else if ($number %5 ==0){
        echo "Buzz \n";
    }
    else{
        echo $number."\n";
    }
}
for ($i=1;$i<=100; $i++){
    fizzbuzz($i);
}
?>
    

<?php
function writeMessage() { 
    echo "You are really a nice person, Have a nice time!<br>"; 
} 
writeMessage(); 

function isPr23ime($n) {
    if ($n <= 1) {
        echo "$n is Not prime";
        return;
    }
    
    $isPrime = true;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break; 
        }
    }

    if ($isPrime) {
        echo "$n is prime";
    } else {
        echo "$n is Not prime";
    }
}

isPr23ime(3); // Correctly outputs "9 is Not prime"
?>

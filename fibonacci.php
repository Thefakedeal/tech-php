<?php

// A number is Fibonacci if and only if one or both of (5*n^2 + 4) or (5*n^2 – 4) 
// is a perfect square


// For Perfect Square n, sqrt(n) should be an integer



function is_perfect_square(int $n){
    $sqrt_n = (int) sqrt($n);
    return pow($sqrt_n,2) == $n;
}

function is_fib(int $n){
    return is_perfect_square( (5*pow($n,2))+4 ) || is_perfect_square( (5*pow($n,2))-4 );
}

$n = (int) readline("Enter N:");

for($i=1;$i<=$n;$i++){
    if(is_fib($i)){
        print(-1);
    }else{
        print($i);
    }
    print(" ");
}
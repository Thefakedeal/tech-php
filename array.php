<?php




function main_program($array_of_ints=[]){
    
    $percentile_dist = [0,0,0,0,0,0,0,0,0,0];
    $max = max($array_of_ints);
    foreach($array_of_ints as $item){
        $percentile = (($item/$max) * 100)-1;
        $percentile = $percentile>0?$percentile:0;
        $index = (int) $percentile/10;
        $percentile_dist[$index]++;
    }

    return $percentile_dist;
}

print_r(main_program([ 13, 5, 67, 100, 82]));

<?php

    $i = 0;
    $nums = explode(",", file_get_contents("input-program-alert.txt"));
    $result = calculate(12, 2, $nums);

     $target = 19690720;
         for ($i=0; $i<= 100; $i++) {
            for ($j=0; $j<=100; $j++) {
                if(calculate($i, $j, $nums) == $target) {
                    print_r(100*$i+$j);
                }
            }
         }
    
    function calculate($num1, $num2, $nums) {
     $nums[1] = $num1;
     $nums[2] = $num2;
     $idx = 0;
     
        while ($nums[$idx] != 99) {
            if ($nums[$idx] == 1) {
                $nums[$nums[$idx+3]] = $nums[$nums[$idx+1]] + $nums[$nums[$idx+2]];
                             
            } else if ($nums[$idx] == 2) {
                $nums[$nums[$idx+3]] = $nums[$nums[$idx+1]] * $nums[$nums[$idx+2]];
            }
            $idx = $idx+4;
        }
        return $nums[0];
    }

<?php
    #Reference Day#1 : https://adventofcode.com/2019
    
    $modules = file("input.txt");
    $fuel = $recursive_fuel = null;

    array_map(function($module) use (&$fuel) {return $fuel += intdiv($module, 3) -2;}, $modules); 
    array_map(function($module) use(&$recursive_fuel) { return $recursive_fuel += calculate_recursive_fuel($module); }, $modules); 
    
    /**
        Calculate fuel recursively
    **/
    function calculate_recursive_fuel($module) {
        $result = intdiv($module, 3)-2;
        $fuel = $result <=0 ? 0 : $result+calculate_recursive_fuel($result);
        return $fuel;
    } 
 ?>

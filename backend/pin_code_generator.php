<?php
function generatepin_code($qtyCaraceters = 5){
    //Random Numbers
    $numbers = (((date('Ymd') / 12) * 24) + mt_rand(800, 9999));
    $numbers .= 1234567890;
 
    //Get together
    $characters = $numbers;

    //Shuffles and takes only the number of characters informed in the parameter
    $pin_code_generator = substr(str_shuffle($characters), 0, $qtyCaraceters);
 
    //Return a pin_code
    return $pin_code_generator;
}
?>
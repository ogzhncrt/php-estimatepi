<?php

class estimate_pi {
    public $precision = 100000; //count of shoot

    public $point_in_circle = 0;
    public $point_in_total  = 0;
   
    function generate_random() {
        return mt_rand() / mt_getrandmax();
    }

}

// area of circle -  pi*r^2
// area of square -  2r^2

$estimate_pi = new estimate_pi;

for ($i=0; $i < $estimate_pi->precision ; $i++) { 

    $x = $estimate_pi->generate_random();
    $y = $estimate_pi->generate_random();

    $distance = $x**2 + $y**2; //calculate distance to the origin.

    if($distance <= 1){ //in the circle
        $estimate_pi->point_in_circle++;
    }

    $estimate_pi->point_in_total++;
}

echo 4*$estimate_pi->point_in_circle/$estimate_pi->point_in_total;

?>
<?php
function get_max() {
    if (func_num_args() == 0) {
        return null;
    }

    $max = func_get_arg(0);
    foreach (func_get_args() as $arg) {
        if ($arg > $max) {
            $max = $arg;
        }
    }
    return $max;
}

echo get_max(10, 20) . "<br>";         
echo get_max(10, 20, 30) . "<br>";     
echo get_max(10, 20, 30, 40) . "<br>"; 
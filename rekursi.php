<?php
// 1. Fibonacci rekursif (n = bilangan ke-n; deret 0, 1, 1, 2, 3, 5, ...)
function fibonacci($n) {
    if ($n <= 1) {
        return $n;                       // base case
    }
    return fibonacci($n - 1) + fibonacci($n - 2);
}

// 2. Pangkat rekursif (x dipangkatkan y)
function pangkat($x, $y) {
    if ($y == 0) {
        return 1;                        // base case
    }
    if ($y < 0) {
        return 1 / pangkat($x, -$y);     // pangkat negatif
    }
    return $x * pangkat($x, $y - 1);
}

echo "Fibonacci ke-7 = " . fibonacci(7) . "<br>";  // 13
echo "2 pangkat 5 = " . pangkat(2, 5) . "<br>";    // 32
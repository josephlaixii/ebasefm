<?php
// PHP program to find roots
// of a quadratic equation
 
// Prints roots of quadratic
// equation ax*2 + bx + x
function findRoots($a, $b, $c)
{
    // If a is 0, then equation is
    // not quadratic, but linear
    if ($a == 0)
    {
        echo "Invalid";
        return;
    }
 
    $d = $b * $b - 4 * $a * $c;
    $sqrt_val = sqrt(abs($d));
 
    if ($d > 0)
    {
        echo "Roots are real and ".
                    "different \n";
        echo (-$b + $sqrt_val) / (2 * $a) , "\n",
             (-$b - $sqrt_val) / (2 * $a);
    }
    else if ($d == 0)
    {
        echo "Roots are real and same \n";
        echo -$b / (2 * $a);
    }
     
    // d < 0
    else
    {
        echo "Roots are complex \n";
        echo -$b / (2 * $a) , " + i" ,
              $sqrt_val, "\n" , -$b / (2 * $a),
                             " - i", $sqrt_val;
    }
}
 
// Driver code
$a = 1; $b = -7 ;$c = 12;
 
// Function call
findRoots($a, $b, $c);
 
// This code is contributed
// by nitin mittal.
?>
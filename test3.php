<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    // if ($a== 0) {
    //     $a-1000;
    // }
    echo "$a:";
    echo "$b <br>";
    return ($a < $b) ? 1 : -1;
    
}

$a = array(1,2,3, 4, 5, 6,  100, 1000, 99999, 41212, 123,  333, 0, -29, -1);
usort($a, "cmp");

echo "<hr>";
foreach ($a as $key => $value) {
    echo "$key: $value <br>";
}

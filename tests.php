<?php

include 'functional.php';


// Test basic construction, destruction and pretty print
$x = cons(5, cons(4, nil()));
echo hd($x) . "\n";
echo hd(tl($x)) . "\n";
pp($x);

// Test iter
function print_times($x){ echo "{$x} times... "; }
iter('print_times', $x);
echo "\n";

// Test map
function times_two($x){ return 2*$x; }
$y = map('times_two', $x);
pp($y);

// Test tail recursive map
$z = map_tr('times_two', $x, nil());
pp($z);

// Test fold
function sum($x, $a) { return $x+$a; }
$s = fold('sum', $y, 0);
echo "{$s}\n";



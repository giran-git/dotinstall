<?php

$scores = [30, 40, 50, 60, 70];
// $partial = array_slice($scores, 2, 3);
// $partial = array_slice($scores, 2);
$partial = array_slice($scores, -2);

print_r($scores);
print_r($partial);
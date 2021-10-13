<?php

$scores = [30, 40, 50];

// array_unshift($scores, 140, 150);
// array_push($scores, 60, 70);
// $scores[] = 80;
// $scores[] = 90;
// array_push($scores, 100, 110);
// array_unshift($scores, 120, 130);
array_shift($scores);
array_pop($scores);

print_r($scores);
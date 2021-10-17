<?php

// $dp = opendir('data');
// while (($item = readdir($dp)) !== false) {
//   if ($item === '.' || $item === '..') {
//     continue;
//   }
//   echo $item . PHP_EOL;
// }

foreach (glob('data/*.txt') as $tiem) {
  // echo $item . PHP_EOL;
  echo basename($item) . PHP_EOL;
}
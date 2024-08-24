<?php
$string = ["Hello", "World", "PHP", "Programming"];
$count = 0;

for ($i = 0; $i < count($string); $i++) {
    $count = 0;
    $strs = $string[$i];
    $str_splits = str_split($strs);
    for ($j = 0; $j < count($str_splits); $j++) {
        $c = $str_splits[$j];
        if (
            $c == 'a' || $c == 'e' || $c == 'i' || $c == 'o' || $c == 'u' ||
            $c == 'A' || $c == 'E' || $c == 'I' || $c == 'O' || $c == 'U'
        ) {

            $count++;
        }
    }
    echo "Original String:{$strs}, Vowel Count {$count},";
    $rev = strrev($strs);
    echo "Reversed String:" . $rev . PHP_EOL;

}


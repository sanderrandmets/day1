<pre>
<?php
$nums = array();

$myfile = fopen("day1.txt", "r");
while (($lines = fgets($myfile)) !== false) {
    array_push($nums, $lines);
}
//var_dump($nums);
foreach ($nums as $num1) {
    foreach ($nums as $num2) {
        if ($num1 + $num2 == 2020) {
            var_dump($num1 * $num2);
        }
    }
}
//print_r($sum);

<?php

$input = array(9863, 7127, 80, 131, 55, 100);

function oddCmp($input)
{
    return ($input & 1);
}

function evenCmp($input)
{
    return !($input & 1);
}

$odd = array_filter($input, "oddCmp");
$even = array_filter($input, "evenCmp");
$odd = array_values(array_filter($odd));
$even = array_values(array_filter($even));


print_r($even);
sort($odd);
sort($even);

$replacement = array(ceil((int)$odd / 10) * 10);

$number = array_replace($odd, $replacement);
print_r($number);
?>

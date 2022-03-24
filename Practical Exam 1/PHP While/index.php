<?php
// A. WHILE Loop

$sum = 0;
$count = 1;

    while($count <= 10) {

        if($count%2 == 0) {
          $sum += $count;
        }

        $count++;

    }

echo nl2br("The sum of all even (1-10) numbers is: $sum <br></br>");

?>

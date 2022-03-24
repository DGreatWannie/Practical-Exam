<?php
$name = array('Marvin', 'Marco', 'Marvin', 'Marco', 'Marco', 'Marvin', 'Christian');
rsort($name);

echo "[";

$clength = count($name);

    for($x = 0; $x < $clength; $x++) {
    echo $name[$x], ",\n";
    }

echo "]";
?>

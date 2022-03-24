<form action="" method="POST">

    <input type="date" name="date1"> <br></br>
    <input type="date" name="date2"> <br></br>


    <button type="submit" name="submit"> enter</button>
</form>

<?php

    if (isset($_POST['submit'])) {

    	$date1 = $_POST['date1'];
    	$date2 = $_POST['date2'];

    	$d1 = strtotime($date1);
    	$d2 = strtotime($date2);

      $diff = abs($d2 - $d1);

      $year = floor($diff / (365*60*60*24));
      $month = floor(($diff - $year * 365*60*60*24) / (365*60*60*24));
      $day = floor(($diff - $year * 365*60*60*24 - $month*30*60*60*24)/ (60*60*24));

      echo "$year year(s), $month month(s), $day day(s)";

    }
?>

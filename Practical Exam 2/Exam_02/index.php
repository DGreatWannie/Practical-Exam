<?php
  $file = <<< AAA
      <?php

      // This is a comment

      echo "This is a test page!";
      echo "Exam number two!";

      //This is the end of a comment

  AAA;
  file_put_contents("hello_there.php", $file);
?>

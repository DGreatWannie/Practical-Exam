<form action="" method="get">
    Enter the word(s): <br>
    <input name='word'><br>
    <button type="submit"> enter</button>
</form>

<?php

    function Reverse($str){
        return strrev($str);
    }

    $str = isset($_GET['word']) ? $_GET['word'] : '';

    echo nl2br("Input:\n $str<br></br>");
    echo nl2br("Output:\n");
    echo nl2br(Reverse($str));
?>

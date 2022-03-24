<form action="" method="get">
    Enter the word:
    <input name='word'><br>
    <button type="submit"> enter</button>
</form>

<?php
    $set = isset($_GET['word']) ? $_GET['word'] : '';

    function check_palindrome($phrase) {
        echo "The word \"$phrase\" is:";

        if ($phrase == strrev($phrase))
            echo "\nPalindrome";
        else
            echo "\nNot Palindrome";
    }
    echo check_palindrome("$set")."\n";
?>

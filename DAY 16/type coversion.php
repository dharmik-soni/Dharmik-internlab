<?php
    $x = "123.abc";
    echo "a = ".$x;
    echo "<br>Type of a is ".gettype($x);
    settype($x,"int");
    echo "<br>After conversion of A is ".gettype($x); 
?>

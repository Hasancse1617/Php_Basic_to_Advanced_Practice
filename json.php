<?php
    // JSON stands for JavaScript Object Notation, and is a syntax for storing and exchanging data.
    $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
    echo json_encode($age);
    $a = json_encode($age);
    var_dump(json_decode($a));
?>
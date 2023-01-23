<?php
    //Ascending order
    $numbers = array(4, 6, 2, 22, 11);
    sort($numbers);
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "\n";
    }

    //Descending order
    rsort($numbers);
    $arrlength = count($numbers);
    for($x = 0; $x < $arrlength; $x++) {
        echo $numbers[$x];
        echo "\n";
    }
    
    //Sort Array (Ascending Order), According to Value - asort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    asort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    //Sort Array (Ascending Order), According to Key - ksort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    ksort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    //Sort Array (Descending Order), According to Value - arsort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    arsort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }

    //Sort Array (Descending Order), According to Key - krsort()
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    krsort($age);
    foreach($age as $x => $x_value) {
        echo "Key=" . $x . ", Value=" . $x_value;
        echo "<br>";
    }
?>
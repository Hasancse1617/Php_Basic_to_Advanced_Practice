<?php
    $x = 1;

    while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
    }

    do {
        echo "The number is: $x <br>";
        $x++;
    } while ($x <= 5);


    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }

    
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
        echo "$x = $val<br>";
    }
?>
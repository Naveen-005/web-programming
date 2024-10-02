<?php

    $items=array(
        "Bread"=>30,
        "Butter"=>30,
        "Jam"=>35,
        "Cheese"=>32,
    );

    print("Array:");
    foreach($items as $item=>$val){
        print("<br>$item: $val");
    }

    asort($items);
    print("<br><br>Sorted array:");
    foreach($items as $item=>$val){
        print("<br>$item: $val");
    }


?>
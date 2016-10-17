<?php

    $arr = array("Toyota","Honda","Nissan","Isuzu");
    $arr2 = ["Toyota","Honda","Nissan","Isuzu"]; // array แบบใหม่ php 5.4 ขึ้นไป
    print_r($arr);
    echo '<hr>';
    
    $arr_count = count($arr);
    for($x=0;$x<$arr_count;$x++){
        echo $arr[$x].'<br>';
    }


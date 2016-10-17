<?php

    $height = ['cat' => 111, 'dog' => 222, 'hen' => 333];
    print_r($height);
    echo '<hr>'; 
    
    echo $height['cat'].'<hr>';
    
    // foreach 
    foreach($height as $key => $value){
        echo $key.' : '.$value.'<br>';
    }


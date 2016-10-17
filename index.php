<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            // put your code here
            echo 'Test php <hr>';
            
            // Type Var
            $a = 12; // integer
            $b = 'Test'; // string
            $c = true; //boolean
            $d = 555.33; //float
            
            echo $a.'<br>';
            echo $b.'<br>';
            echo $c.'<br>';
            echo $d.'<hr>';
            
            // array //////////////////
            $arr = array("Toyota","Honda","Nissan");
            print_r($arr);
            echo '<hr>';
            
            echo $arr[0].'<br>';
            echo $arr[1].'<br>';
            echo $arr[2].'<hr>';
        ?>
    </body>
</html>

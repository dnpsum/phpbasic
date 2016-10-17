<?php

    class car{
        
        public $color; // property
        
        public function setColor($c){
            return 'Car is :: '.$this->color=$c;
        }
        
        public function seyHello(){
            return 'Hello';
        }
    }

    $newcar = new car;
    $test = $newcar->setColor('black');
    echo $test;
    echo '<hr>';
    
    echo $sey = $newcar->seyHello();
    //echo $sey;
    // หรือ 
    echo $newcar->seyHello().'<br>'; //เข้าถึง function
    
    echo $newcar->color='red'; // เข้าถึงตัวแปร

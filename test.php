<?php

function color(){
    $a = 0;
    while ($a <= 10) {
        $code = 'rgb(' . mt_rand(0 , 255) . ',' . mt_rand(0 , 255) . ',' . mt_rand(0 , 255) . ')';
        echo '<div style ="background-color:'.$code.'><div class="code">'.$code.'</div></div>';
        $a = $a + 1 ;
    }

}
color();

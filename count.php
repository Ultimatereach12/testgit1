<?php

$string = 'a|b|c|d|e';

$tags = explode('|' , $string);


foreach($tags as $i =>$key) {

    echo $i.' '.$key .'</br>';

}

?>

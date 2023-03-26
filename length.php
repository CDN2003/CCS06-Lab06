<?php
function compute($value) {
    $length = strlen($value);
    $count = $length * 2;


    return $count;
}
echo compute("Twister");
?>

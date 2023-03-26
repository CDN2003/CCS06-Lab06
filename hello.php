<?php
function greet() {
    $message = "Hello World! The date today is ";
    $date = date("l jS \of F Y");
    return $message . $date;
}
echo greet()
?>

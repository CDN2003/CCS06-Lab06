<?php

function age($n){
    $date = date("Y");
    $age = $date - $n;
return $age;
}  

function voter($n){
    $date = date("Y");
    $age = $date - $n;
    if ($age >= 18){
        echo "you are a voter";
    } else {
        echo "you are not elligeble to vote";
    }
}

function senior($m){
    $date = date("Y");
    $age = $date - $m;
    if ($age >= 60){
        echo "You are a Senior Citizen";
    } else {
        echo "You are not yet a Senior Citizen";
    }
}
  echo "Your name is " . $argv[1] . ", and your age is " . age($argv[2]) . " years old\n";
  echo voter($argv[2]) . "\n";
  echo senior($argv[2]) . "\n";
?>

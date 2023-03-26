<?php
for ($i = 4; $i <= 2024; $i+=4) {
    
    if ($i%400 !== 0 && $i%100 == 0){
        continue;
    }
    echo "$i\n";
}  
?>

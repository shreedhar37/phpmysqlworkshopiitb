<?php

$week = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");

echo "The days of week are: <br>";

for ($i=0; $i<count($week);$i++){   //count($arrayname) function counts the length of an given array.
    echo "$week[$i] <br>";
}
?>
<?php

error_reporting(0);
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result") or die("Connection Failed");


if ($connect) {
$select = "SELECT * FROM class1 WHERE name='Rohan'";

$extract = mysqli_query($connect,$select);

while ($row = mysqli_fetch_assoc($extract)) {

$sub1 = $row["sub1"];
$sub2 = $row["sub2"];
$sub3 = $row["sub3"];
$sub4 = $row["sub4"];
$sub5 = 99;
$name1 = $row["name"];
$newtotal = $sub1+$sub2+$sub3+$sub4+$sub5;
$newpercent = ($newtotal / 500 ) * 100 ;

$update = "UPDATE class1  SET sub5='$sub5' , total_obtained = '$newtotal' , percent = '$newpercent' WHERE name='$name1'";
// updating the database.

mysqli_query($connect,$update) or die(mysql_error($connect));

}

mysqli_close($connect); 

echo "<h2><b>Marks updated succesfully</b></h2>";

}
 
?>






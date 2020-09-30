<html>
<body>
 
<?php

 echo $_POST["name"]."<br>";
 echo "Marks in Each Subject<br>";
 echo "Subject 1: ".$_POST["m1"]."<br>";
 echo "Subject 2: ".$_POST["m2"]."<br>";
 echo "Subject 3: ".$_POST["m3"]."<br>";
 echo "Subject 4: ".$_POST["m4"]."<br>";
 echo "Subject 5: ".$_POST["m5"]."<br>";
 echo "Total Marks Obtained: ".($_POST["m1"] + $_POST["m2"] + $_POST["m3"] + $_POST["m4"] + $_POST["m5"])."<br>";
 echo "Total Marks: ".($_POST["m1"] + $_POST["m2"] + $_POST["m3"] + $_POST["m4"] + $_POST["m5"])."<br>";
 
 $percentage = (($_POST["m1"] + $_POST["m2"] + $_POST["m3"] + $_POST["m4"] + $_POST["m5"]) / 500) * 100;
 echo "Percentage: ".$percentage;
 
?>

</body>
</html>
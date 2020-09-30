<html>
<body>
 
<?php

 $matrix1 = array(0,0,0,0);
 $matrix2 = array(0,0,0,0);

 for ($i= 0; $i<4; $i++)
 {
    if ($i == 0) { 
    $matrix1[$i] = $_POST["m100"];
            }
    else if ($i == 1){
        $matrix1[$i] = $_POST["m101"];
    }       
    else if ($i == 2){
        $matrix1[$i] = $_POST["m110"];
    }   
    else if ($i == 3){
        $matrix1[$i] = $_POST["m111"];
    }   
 }
  
 for ($i= 0; $i<4; $i++)
    {
       if ($i == 0) { 
       $matrix2[$i] = $_POST["m200"];
               }
       else if ($i == 1){
           $matrix2[$i] = $_POST["m201"];
       }       
       else if ($i == 2){
           $matrix2[$i] = $_POST["m210"];
       }   
       else if ($i == 3){
           $matrix2[$i] = $_POST["m211"];
       }
    }   

echo "<p><b>Matrix 1</b></p>";

for ($i = 0; $i < 4; $i++)
{
    if ($i<2){
        echo $matrix1[$i]." ";
    }
    else if($i == 2 ){
        echo "<br>";
        echo $matrix1[$i]." ";
    }
    else{
        echo $matrix1[$i];
    }
}

echo "<p><b>Matrix 2</b></p>";

for ($i = 0; $i < 4; $i++)
{
    if ($i<2){
        echo $matrix2[$i]." ";
    }
    else if($i == 2 ){
        echo "<br>";
        echo $matrix2[$i]." ";
    }
    else{
        echo $matrix2[$i];
    }
}

echo "<p><b>Matrix Addition:</b></p>";

for ($i = 0; $i < 4; $i++)
{
    if ($i<2){
        echo ($matrix1[$i] + $matrix2[$i])." ";
    }
    else if($i == 2 ){
        echo "<br>";
        echo ($matrix1[$i] + $matrix2[$i])." ";
    }
    else{
        echo ($matrix1[$i] + $matrix2[$i]);
    }
}

?>
</body>
</html>
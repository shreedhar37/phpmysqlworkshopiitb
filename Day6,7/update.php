<?php

error_reporting(0);


print('
   <div style="text-align:center;"><form action="update.php" method="post">
   <input type="text" name="uname" placeholder="Student Username" required><br><br>
   <lable>PHP Marks:</label>
   <input type = "number" min="0" max="100"  name="phpm" required><br><br>
   <label>MSQL Marks: </label>
   <input type = "number" min="0" max="100"  name="mysqlm" required><br><br>
   <label>HTML Marks: </label>
   <input type = "number" min="0" max="100"  name="htmlm" requied><br><br><br>
   <input type= "submit" name="submit" value="Update">
   
   </form></div>');



if ((@$_POST["submit"]))
{   
    
$uname = @$_POST["uname"];  

$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

if ($connect){
  $select = "SELECT * FROM student WHERE  uname='$uname'";
  $extract = mysqli_query($connect,$select);
  
  
  while ($row = mysqli_fetch_assoc($extract)) 
  {
      $suname = $row["uname"];
  }
  
  if ($uname != $suname){
      
      echo '<p style="text-align:center;">Invalid Username!!</p><br><br>';
      mysqli_close($connect);   
        exit(0);  
      
                        }  
     


    $phpm = @$_POST["phpm"];
    
    $mysqlm = @$_POST["mysqlm"];
    $htmlm = @$_POST["htmlm"];
    $tmo = $phpm + $mysqlm + $htmlm;
    $tm = 300;
    $percent = ($tmo / $tm) * 100;


    $update = "UPDATE student 
               SET phpm='$phpm',mysqlm='$mysqlm',htmlm='$htmlm',tmo='$tmo',tm='$tm',percentage='$percent'
               WHERE uname='$uname'";   
                                
   
    $write = mysqli_query($connect,$update) or die("Invalid Student Name"); 
    
    if((@$_POST["submit"])){
    echo '<p style="text-align:center;">Record Updated Successfully</p>';
    }
    mysqli_close($connect);

}
}


?>
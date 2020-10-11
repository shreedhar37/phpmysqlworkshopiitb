<?php

if (isset($_POST["submit"])){
    echo '<p style="text-align:center;"><strong>Do you really want to delete the data?</strong></p>';
    
    print('
        <div style="text-align:center;">
        <form action="delete.php" method="post"> 
        <input type="submit" name="Y"
                 value="YES" > 
          
        <input type="submit" name="N"
                 value="NO" > 
        </form>
        </div>'); 

}
if((@$_POST['Y'])) { 
    echo '<p style="text-align:center;"><strong>You are going to delete a record</strong></p><br>';
    print('<div style="text-align:center;">
    <form action="delete.php" method="POST"> 
    <input type="text" name="usrname" placeholder="Student Username" required><br><br> 
    <input type="submit" name="delete" value="Delete">  
    </form>
    </div>');

}
    
if (@$_POST["delete"])
    {
    $uname = @$_POST["usrname"];
    
    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
    mysqli_select_db($connect,"marksheet") or die(mysqli_error());
    
    $select = "SELECT * FROM student WHERE  uname='$uname'";
    $extract = mysqli_query($connect,$select);
    
    $suname = "";
    while ($row = mysqli_fetch_assoc($extract)) 
    {
           $suname = $row["uname"];
    }

    if ($uname != $suname)
    {
      echo '<br><p style="text-align:center;">Invalid Username!!<br>Unable to delete the record</p><br>';
      exit(0);
      
    }
    
    $delete = "DELETE FROM student WHERE uname='$uname'";

    $write = mysqli_query($connect,$delete) or die("Unable to delete the record!");
    
    if ($uname == $suname){
      echo "<br>The record deleted successfully";
      mysqli_close($connect);
    }
    } 

if((@$_POST['N'])) { 
    echo '<a style="text-align:center;" href="admin.php">home</a>'; 
} 

    

?>
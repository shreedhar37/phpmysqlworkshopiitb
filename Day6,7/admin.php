<?php


error_reporting(0);
$adname = $_POST["uname"];
$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

if ($connect){
$select = "SELECT * FROM admin WHERE  adname='$adname'";
$extract = mysqli_query($connect,$select);


while ($row = mysqli_fetch_assoc($extract)) 
{
    
    $adname = $row["adname"];
    $paswd  = $row["adpswd"];

}    

if ($adname!= $_POST["uname"]){
    
    echo "Invalid Username!!<br><br>";
    print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Login again" name="alogin">
      <input type="submit" value="Register again" name="aregister">
      </form> ');
      mysqli_close($connect);    
      exit(0);  
        
}

if ($paswd != $_POST["pswd"]){
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
    echo "Incorrect Password!!<br><br>";
    print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Login again" name="alogin">
      </form> ');
    mysqli_close($connect);
    exit(0);  
}

mysqli_close($connect);

}

echo '<p style="text-align:center;"><b>Welcome $adname</b></p><br>';

print (' 
        <div style="text-align:center;">
        <form action="insert.php" method="POST">
        <input type="submit" value="INSERT"><br><br>
        </form> 
        </div>   
');

print('
<div style="text-align:center;">
<form action="update.php" method="POST">
<input type="submit" value="UPDATE" name="submit"><br><br>
</form>
</div>');


print('
<div style="text-align:center;">
<form action="delete.php" method="POST">
<input type="submit" name="submit" value="DELETE">
</form>
</div> ');

mysqli_close($connect);


?>








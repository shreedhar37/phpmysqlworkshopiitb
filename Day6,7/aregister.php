<?php
print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');

error_reporting(0);

$pswd = $_POST["pswd"];
$cpswd = $_POST["cpswd"];

$email = $_POST["email"];

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo "Invalid email format<br>Please register again<br>";
  print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Register" name="aregister">
      </form> ');

  exit(0);
}

if ($pswd != $cpswd) {
   echo "Password and Confirm password should match!<br>";
   echo "<br>Please register again<br><br>";  
   print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Register" name="aregister">
      </form> ');

   exit(0);
  }

$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

if($connect)
{
    $name = $_POST["name"];
    $aname = $_POST["uname"];
    $email = $_POST["email"];
    $pswd = $_POST["pswd"];
  
    $insert = "INSERT INTO admin VALUES ('$name','$aname','$email','$pswd')";
    $write = mysqli_query($connect,$insert) or die(''.$uname.' is already taken by another user. Please select another username.<br><br>
        <form action = "auth.php" method="post">      
        <input type="submit" value="Register again" name="aregister">
        </form>');
        
        if ($write)
        {
            echo "You've registered successfully<br><br> Please login now<br><br>";
            print(' 
            <form action = "auth.php" method="post">      
            <input type="submit" value="Login" name="alogin">
            </form> ');
      
        }
        else{
            
          echo "Oops failed to stored the data";
        }
      
        mysqli_close($connect);
      }
      

?>
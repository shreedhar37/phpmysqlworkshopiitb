<?php



$uname = $_POST["uname"];
error_reporting(0);

$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"marksheet") or die(mysqli_error());

if ($connect){
$select = "SELECT * FROM student WHERE  uname='$uname'";
$extract = mysqli_query($connect,$select);


while ($row = mysqli_fetch_assoc($extract)) 
{
    $name = $row["name"];
    $usrname = $row["uname"];
    $email = $row["email"];
    $paswd  = $row["password"];
    $phpm = $row["phpm"];
    $mysqlm = $row["mysqlm"];
    $htmlm = $row["htmlm"];
    $tmo = $row["tmo"];
    $tm = $row["tm"];
    $percentage = $row["percentage"];
        
}

if ($usrname != $_POST["uname"]){
    
    echo "Invalid Username!!<br><br>";
    print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Login again" name="login">
      <input type="submit" value="Register again" name="register">
      </form> ');
    exit(0);  
    
}

if ($paswd != $_POST["pswd"]){
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
    echo "Incorrect Password!!<br><br>";
    print(' 
      <form action = "auth.php" method="post">      
      <input type="submit" value="Login again" name="login">
      </form> ');
    exit(0);  
    
}

print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');


print('
<table border="1" style="margin-left: auto; margin-right: auto; border-collapse: collapse; width: 46.3577%; height: 438px;" height="366">
<tbody>
<tr style="height: 17px;">
<td style="width: 71.5936%; height: 36px;" colspan="4">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>MARKSHEET</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 71.5936%; height: 95px;" colspan="4">
<p><strong>&nbsp;Name:&nbsp;'.$name.' &nbsp; &nbsp; </strong></p>
<p><strong>&nbsp;Email: '.$email.'</strong></p>
</td>
</tr>
<tr style="height: 17px;">
<td style="width: 1.50602%; height: 46px;">&nbsp;<strong>Serial&nbsp; &nbsp;No.</strong></td>
<td style="width: 31.9134%; height: 46px;">&nbsp; <strong>Subject</strong></td>
<td style="width: 22.1938%; height: 46px;">&nbsp; &nbsp; &nbsp;<strong>&nbsp;Marks Obtained</strong></td>
<td style="width: 15.9804%; height: 46px;">&nbsp; &nbsp;&nbsp;<strong>Total Marks</strong></td>
</tr>
<tr style="height: 17px;">
<td style="width: 1.50602%; height: 51px;">&nbsp; &nbsp; 1</td>
<td style="width: 31.9134%; height: 51px;">&nbsp; &nbsp; PHP</td>
<td style="width: 22.1938%; height: 51px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '.$phpm.' </td>
<td style="width: 15.9804%; height: 51px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100</td>
</tr>
<tr style="height: 17px;">
<td style="width: 1.50602%; height: 53px;">&nbsp; &nbsp; 2</td>
<td style="width: 31.9134%; height: 53px;">&nbsp; &nbsp;MYSQL</td>
<td style="width: 22.1938%; height: 53px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; '.$mysqlm.'</td>
<td style="width: 15.9804%; height: 53px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100</td>
</tr>
<tr style="height: 17px;">
<td style="width: 1.50602%; height: 17px;">&nbsp; &nbsp;3</td>
<td style="width: 31.9134%; height: 17px;">&nbsp; &nbsp;HTML</td>
<td style="width: 22.1938%; height: 27px;" rowspan="2">
<p>&nbsp; &nbsp;&nbsp; </p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;'.$htmlm.'</p>
<p></p>
<hr style="border-top: 1px solid black;" /><strong>&nbsp;Total:&nbsp; &nbsp;</strong>'.$tmo.'<br><br></td>
<td style="width: 15.9804%; height: 27px;" rowspan="2">
<p>&nbsp; &nbsp;</p>
<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;100</p>
<p></p>
<hr style="border-top: 1px solid black;" /><strong>&nbsp;Total:&nbsp;</strong>'.$tm.'<br><br></td>
</tr>
<tr style="height: 17px;"></tr>
</tbody>
</table>
<p></p> ');


if ($percentage > 60)
{
    echo "<br><h4 style='text-align:center;'>Congratulations $name. You have secured $percentage%.</h4>. ";
}

echo "<br><a href='sendmail.php' style='margin-left:660px;'>E-mail your result</a>.";
mysqli_close($connect);
}
?>
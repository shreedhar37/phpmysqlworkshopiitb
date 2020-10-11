<html>
<head></head>
<body>
<div style="text-align:center;">
<form action = "sendmail.php" method="POST">
    Your Name: <input type="text"  name="name" style="margin-left:35px;" required><br><br>
    Mail Id:<input type="email"  name="mail" style="margin-left:65px;" required><br><br>
    Name of parent: <input type="text"  name="pname" style="margin-left:10px;" required><br><br>
    Mail Id:<input type="email"  name="pmail" style="margin-left:65px;" required><br><br>
    <input type="submit" name="submit" value="send">
 </form></div>
</body>
</html>

<?php

if(@$_POST["submit"])
{   
    $name1 =  @$_POST["name"];
    $email = @$_POST["mail"];
    $connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
    mysqli_select_db($connect,"marksheet") or die(mysqli_error());
    if ($connect){
        $select = "SELECT * FROM student WHERE  email='$email'";
        $extract = mysqli_query($connect,$select);
        
        
        while ($row = mysqli_fetch_assoc($extract)) 
        {
            $name = $row["name"];
            $usrname = $row["uname"];
            $email = $row["email"];
            $phpm = $row["phpm"];
            $mysqlm = $row["mysqlm"];
            $htmlm = $row["htmlm"];
            $tmo = $row["tmo"];
            $tm = $row["tm"];
            $percentage = $row["percentage"];
                
        }
        mysqli_close($connect);
    }

 $pname = @$_POST["pname"];       
 $mailto = @$_POST["mail"];
 $mailto1 = @$_POST["pmail"];
 $subject = "Result-Marksheet";
 $msg = "Dear $name1,\n ";
 $msg = $msg."Check your result below: \n";
 $finalmsg = $msg.'<table border="1" style="margin-left: auto; margin-right: auto; border-collapse: collapse; width: 46.3577%; height: 438px;" height="366">
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
 <p></p>';
$finalmsg = $finalmsg . "Thank you.";
 
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers .= 'From: meshree4@gmail.com' . "\r\n";

$headers1 = "MIME-Version: 1.0\r\n";
$headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";
$headers1 .= 'From: meshree4@gmail.com' . "\r\n";
 

 $msg1 = "Dear $pname,";
 $msg1 = $msg1 . "Check your child $name1 result below:\n";
 $finalmsg1 = $msg1 .'<table border="1" style="margin-left: auto; margin-right: auto; border-collapse: collapse; width: 46.3577%; height: 438px;" height="366">
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
 <p></p>';
 $finalmsg1 = $finalmsg1 . "Thank you."; 
 
 mail($mailto,$subject,$finalmsg,$headers);
 mail($mailto1,$subject,$finalmsg1,$headers1);
 echo "<br><p style='text-align:center;'>E-mail sent successfully.</p><br>";

}

?>
 



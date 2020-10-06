<?php

error_reporting(0);

$connect = mysqli_connect("localhost","root","") or die(mysqli_error());  
mysqli_select_db($connect,"visitor_counter") or die(mysqli_error());

if($connect)
{  
   $select = "SELECT * FROM visitor_counts WHERE id=1";
   $extract = mysqli_query($connect, $connect); //in database we have already inserted value of vount as 0.
   while ($row = mysqli_fetch_assoc($extract)) 
   {
    $vcount = $row["vcount"];            
   }
   
   $update = "UPDATE visitor_counts SET vcount= $vcount+1 WHERE id = 1";
   $extract = mysqli_query($connect,$update) or die(mysqli_error($connect));
   mysqli_close($connect);
   echo "You've had $vcount visitors.";   
       
}       



<?php



if(isset($_POST["login"]))
{
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
    //please use print function as we are creating html form inside php script

    print('
    <div style="text-align:center;">
    <p><b>Login</b></p><br>
    <form action="marks.php" method="post">
    <input type= "text" placeholder="Username" name="uname" required><br><br>
    <input type= "password" placeholder="Password" name="pswd" required><br><br>
    <input type= "submit" name="submit">
    </form><div>');      

}

elseif(isset($_POST["register"]))
{ 
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
   
    //please use print function as we are creating html form inside php script
       
    print('
   <div style="text-align:center;">
   <p><b>Register</b></p><br>
   <form action="register.php" method="post">
   <input type= "text" placeholder="Name" name="name" required><br><br>
   <input type= "text" placeholder="Username" name="uname" required><br><br>
   <input type "email" placeholder="Email" name="email" required><br><br>
   <input type= "password" placeholder="Password" name="pswd" required><br><br>
   <input type= "password" placeholder="Confirm Password" name="cpswd" required><br><br>
   <input type = "number" min="0" max="100"  name="phpm" required><br><br>
   <label>MSQL Marks: </label>
   <input type = "number" min="0" max="100"  name="mysqlm" required><br><br>
   <label>HTML Marks: </label>
   <input type = "number" min="0" max="100"  name="htmlm" requied><br><br><br>
   <input type= "submit" name="submit">
   </form><div>');

}

elseif(isset($_POST["alogin"])){
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
    //please use print function as we are creating html form inside php script
    print('
   <div style="text-align:center;">
   <p><b>Login</b></p><br>
   <form action="admin.php" method="post">
   <input type= "text" placeholder="Username" name="uname" required><br><br>
   <input type= "password" placeholder="Password" name="pswd" required><br><br>
   <input type= "submit" name="submit">
   </form><div> '); 
}

elseif(isset($_POST["aregister"])){
    print('<h3><a href="home.php" style="text-align:center;">Home</a></h3><br><br><br>');
    //please use print function as we are creating html form inside php script
    print('
   <div style="text-align:center;">
   <p><b>Register</b></p><br>
   <form action="aregister.php" method="post">
   <input type= "text" placeholder="Name" name="name" required><br><br>
   <input type= "text" placeholder="Username" name="uname" required><br><br>
   <input type "email" placeholder="Email" name="email" required><br><br>
   <input type= "password" placeholder="Password" name="pswd" required><br><br>
   <input type= "password" placeholder="Confirm Password" name="cpswd" required><br><br>
   <input type= "submit" name="submit">
   </form><div> '); 

}

?>
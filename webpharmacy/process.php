

<?php

//get value passe from in login.php file
$username = $_POST['user'];
$password = $_POST['pass'];

//to privent mysql injection
//conect to the server$servername = "localhost";




// Create connection
$connect=mysqli_connect("localhost","root","","pharmacy");
$res ="select* from user where username ='$username' and password='$password'";
  $r=mysqli_query($connect,$res);
        
   $row = mysqli_fetch_array($r);
   if($row['username']==$username && $row['password'] == $password)
{
        header("location: index.php");

}
   
?> 



<?php
//for registration

	
	$email = $_POST['email'];
	$password = $_POST['pass'];
    
    $db=mysqli_connect("localhost","root","","pharmacy");

    $q="insert into signup(email,password) values('$email','$password')";

    $r=mysqli_query($db,$q);

   if($r)
   {

   	echo"SignUp Sucessfull !";
   }



  
?>
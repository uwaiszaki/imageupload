<?php
$name = $_POST["name"];
$pass = $_POST["pass"];
$email = $_POST["email"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$dob=$_POST["dob"];
$servername="localhost";
$username="root";
$password=" ";
$db="uwais";
$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn)
{
  die("Unable to open");
}
else
{ 
  echo "connection established<br>";
}

/*
echo  "$name<br>";
echo  "$pass<br>";
echo  "$email<br>";
echo   "$gender<br>";
echo   "$age<br>";
echo   "$dob<br>";
*/

  $sql= " INSERT INTO signup (name,password,emailid,gender,dob,age) VALUES ('$name', '$pass', '$email','$gender','$dob','$age' ); ";
  $result= mysqli_query($conn,$sql);
  echo "$result <br>";
 if($result==0)
{  die("sign up unsuccessful " . mysqli_error());
}
else
 {
 	echo "Sign up successful"; 
  include 'imageupload.php';
}
// create table signup( userid INTEGER(20) AUTO_INCREMENT primary key NOT NULL, name VARCHAR(20) , password VARCHAR(20) , emailid VARCHAR(20) , gender VARCHAR(5) , dob DATE ,age INTEGER(5) );
 

 ?>

 

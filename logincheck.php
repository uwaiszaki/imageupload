
<?php
$name = $_POST["name"];
$pass = $_POST["pass"];
$servername="localhost";
$username="root";
$password="01412302263";
$db="uwais";

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn)
{
  die("Unable to open");
}
  else
  {   echo "Server connected<br>";
    $sql="SELECT name,password FROM signup ;";
   $result = mysqli_query($conn,$sql);
  $resultcheck = mysqli_num_rows($result);
  $a=0;
  
  if($resultcheck > 0)
  {   echo "Query done<br>";
        
   while($row = mysqli_fetch_assoc($result))
    {  $pass1=$row['password'];
      $name1=$row['name'];

      if($name==$name1)
      {
      	if($pass==$pass1)
        {
        	$a=1;
        }
      }
     
  
    }

      if($a==1)
      {
         echo "Login Successful";
         include('page1.php');

      }
      else
  	  echo "Username or Password is incorrect";  
  }  
else
  {
  	echo "Error in Retreiving the data";
  }
  
 
  } 
 ?>
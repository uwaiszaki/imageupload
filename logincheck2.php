
<?php
$name = $_POST["name"];
$pass = $_POST["pass"];
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
        {   echo "login Successful <br>";
        	echo "Name is ".$name."<br>";
        	echo "Password is ".$pass;
        	$a=1;
          echo "<a href='imageupload.php' >Click to upload image </a><br>";
          echo "<a href='myprofile.php' >Click to skip</a> ";
           session_start();
           $_SESSION['name']=$name;  
        }
      }
     
    }

      if($a==0)
  	  echo "Username or Password is incorrect";
      //else
      //include 'imageupload.php';  
   }    
else
  {
  	echo "Error in Retreiving the data";
  }
  
 
  } 
 ?>
<!DOCTYPE html>
<html>
<head>

<style >
	
.b, th , td{

border: solid   black;

}


</style>

	<title>Your Profile</title>

</head>
<body>



<?php
echo "<h1 >Your Profile </h1>";

$conn=mysqli_connect("localhost","root"," ","uwais");
if(!$conn)
{
	die("Error connecting to the page");

}
else
{

session_start();
$name1=$_SESSION['name'];
$sql="SELECT  * FROM signup WHERE name='$name1';";
$result=mysqli_query($conn,$sql);
 
 if($result==0)
 {
 	die("error in result");
 }
else
{
echo "<table class='b'>";
     echo "<tr>";
     echo "<th>Name</th>";
     echo "<th>Password</th>";
     echo "<th>Date Of Birth</th>";
     echo "<th>Age</th>";
     echo "<th>Gender</th>";
     echo "<th>Image Address</th>";
     echo "</tr>";  
     
while($row=mysqli_fetch_assoc($result))
 	{
     echo "<tr>";
     echo "<td>".$row['name']."</td>";
     echo "<td>".$row['password']."</td>";
     echo "<td>".$row['dob']."</td>";
     echo "<td>".$row['age']."</td>";
     echo "<td>".$row['gender']."</td>";
     echo "<td>".$row['image']."</td>";
     echo "</tr>";
     
   echo "<img src='".$row['image']."' style=' height:300px; width:300px; float:left'; >";
   	}
echo "</table>";


}

echo "<a href='logout.php'  style='position:top-right;'>Log out <a>";
/*echo "<br> <form method='POST' action=' '> <br>";
echo " <input type='submit'  name='submit1'>";
echo "</form>";
if(isset($_POST['submit1']))
{  echo "hello";
session_unset();
session_destroy();
}
else echo "not set";
*/
}
?>

</body>
</html>

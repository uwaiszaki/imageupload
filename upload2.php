
<html>
<head>
<title></title>
</head>
<body>
<?php
$dir="uploads/";
//print_r($_FILES);
$filename=$dir.basename($_FILES["pic"]["name"]);


$tmpfile=$_FILES["pic"]["tmp_name"];
$type=$_FILES["pic"]["type"];
//echo $type."<br>";
//echo $filename;
//echo $tmpfile;
$arr=explode('.',$filename); 
$extention=strtolower(end($arr));

$error=$_FILES["pic"]["error"];
$picturetypes=array("png","jpg","jpeg");
//echo "<br>".$error;

//echo $extention;  
if($error==0)
{

 if(in_array($extention, $picturetypes))
 { 

	   if($_FILES["pic"]["size"]<500000)
	   {
            if(move_uploaded_file($tmpfile, $filename))
            {
          	 



       $conn=mysqli_connect("localhost","root"," ","uwais");

       if(!$conn)
       {
        die("Error in connecting to database");
       }
       else
           {  session_start();
              
             $username=$_SESSION['name'];
               $sql="UPDATE signup SET image='$filename' where name='$username';";
              $result=mysqli_query($conn,$sql); 
                if($result==0)
                {   echo "problem";

                }
                else
                  echo "Image added successfully<br>";  
                 
                  echo '<a href="myprofile.php" > Click To See Profile <a>' ;

            }
          }
            else
            echo "Error in moving the temp file";            
	   }
         else
	       echo "Size too large";
  }
   else
	echo "Selected file is not an image";

}
else
echo "Error in uploading";



?>
</body>
</html>
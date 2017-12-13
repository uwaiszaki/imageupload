<?php
	
$dir="/var/www/html/uploads/";
$file=$dir.basename($_FILES["file"]["name"]);
$type=$_FILES["file"]["type"];
echo $type;
$size=$_FILES["file"]["size"];
$tmpfile=$_FILES["file"]["tmp_name"];
$filetypes=array("jpg","jpeg","txt","png");
$error=$_FILES["file"]["error"];
echo $error;
$a=explode('/', $type);
$extention=strtolower(end($a));
echo "<br>".$extention;
//$fileExt= explode('.',$file); // seperating into array of file name and extention
//$realfileExt= strtolower(end($fileExt));            

if(error==0)
{
 if(in_array($extention, $filetypes))                                // if (in_array($realfileExt, $filetypes)) 

{
	

if($size>100000)
{

//if(
	move_uploaded_file($tmpfile,$file);
//{
//	echo "File uploaded";
//}
//	else echo "Not uploaded";

}

else
	echo "Size is small";
}

else
echo "File not of specified type";
}
else 
echo "Error found";

?>

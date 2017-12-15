<html>
<head>
<style>
p.a{ text-align: right; margin-right: 70px; font-size: 30px; }

body {   background-image: url("abcd.jpg"); background-attachment: fixed; 	background-position: center; }

.b{ text-align: right;   font-size: 20px;     }
#c{ margin-right: 60px; }

.header {

border: solid 5px;  margin:auto;  text-align: center;      padding:10px;

}
 
</style>
</head>
<body>

<?php 
include 'homepage.php';

 ?>

<h1 class="header">
	Login 

</h1>



   <p class="a">Login</p>
   <br>
   <form action="logincheck2.php" method="POST" class="b">

   Name<input type="text" name="name" value="name"> <br> <br>

   Password<input type="password" name="pass" value="password"> <br> <br>

   <input type="submit" id="c">

</form>

 

<?php


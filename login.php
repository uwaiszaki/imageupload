<html>
<head>
<style>
p.a{ text-align: right; margin-right: 70px; font-size: 30px; }

body {   background-image: url("abcd.jpg"); background-attachment: fixed; 	background-position: center; }

.b{ text-align: right;   font-size: 20px;     }
#c{ margin-right: 60px; }
</style>
</head>
<body>

<p class="a">Login</p>
<br>
<form action="logincheck.php" method="POST" class="b">

Name<input type="text" name="name" value="name"> <br> <br>

Password<input type="password" name="pass" value="password"> <br> <br>

<input type="submit" id="c">

</form>

<br> <br> <br> 
<p class="a">  <a href="signup.php"  style=" color:black;" >Sign up<a></p>
</body>
</html>
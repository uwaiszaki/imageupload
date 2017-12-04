<html>
<head>
<style>
p.a{ text-align: right; margin-right: 70px; font-size: 30px; }

body {   background-image: url("abcd.jpg"); background-attachment: fixed; 	background-position: center; }

.b{ text-align: right;   font-size: 20px;     }
#c{ margin-right: 60px; }
.d{ margin-right: 10px; }
</style>
</head>
<body>

<p class="a">Sign Up</p>

<form action="connectionsignup.php" method="POST" class="b">

Name<input type="text" name="name" value="name"> <br> <br>

Age<input type="text" name="age"  value="age"> <br> <br>

<span class="d">

Date Of Birth </span><input type="Date"  name="dob" value="dd/mm/yyyy"> <br> <br>

Email Id<input type="Email" name="email" value="abc123@gmail.com"> <br> <br>

Set Password<input type="Password" name="pass" value="password"> <br> <br>

<p style=" margin-right: 120px;">Gender </p> 
Male<input type="radio" name="gender" value="male" style=" margin-right: 100px;">     <br>
Female<input type="radio" name="gender" value="female" style=" margin-right: 100px;">  <br>
Other<input type="radio" name="gender"  value="other" style=" margin-right: 100px;">  <br> 

<br>
<input type="submit" id="c">

</form>

 

</body>
</html>
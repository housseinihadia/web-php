<!DOCTYPE html>
<html>
<head>
<title>webchat</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<div id="main">
  <div id="info">
       <h2>login here</h2>
   
        <form action="login.php" method="post">
         <label><b>Username</b></label>
         <input type="text" name="uname" placeholder="User name"><br><br>
         <label><b>password</b></label>
         <input type="text" name="pass" placeholder="password"><br><br>
        <button style="background-color:#6495ed; color: white; " type="submit">
        <b>login</b></button>
        </form>

        <form action="signup.php" method="post">
        <h2>dont have  an accont signup here</h2>
        <label>Username:</label>
         <input type="text" name="uname" placeholder="Username"><br><br>
         <label>Email Add:</label>
         <input type="text" name="Email" placeholder="Email"><br><br>
         <label>password:</label>
         <input type="text" name"password" placeholder="password"><br><br>
         <button style="background-color:#6495ed; color: white; " type="submit">
         <b>singup</b></button>





        </form>

</div>
</div>
</body>
</html>
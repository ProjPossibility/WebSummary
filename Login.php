<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Login</title>
  
  <link rel="stylesheet" type="text/css" href="login.css" />
  
  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>

<body>
<h1> Welcome to Integrated Learning Systems! </h1>
<hr style="width: 100%; height: 2px;">
<h2> Students: </h2>

<div id="logon">
<form name="input" action="StudentMenu.php" method="get"> Full
name: <input name="student" type="text">
  <input value="Submit" type="submit"></form>
</div>



<h3> Teachers: </h3>

<div id="logon">
    
    <FORM ACTION="passwordcheck.php" METHOD=POST>
        Password: <INPUT TYPE="PASSWORD" NAME="mypassword">
        <INPUT TYPE=SUBMIT VALUE="submit">
    </FORM>
    
<!--
<form name="input" action="passwordcheck.php" method="get">
    <input name="Password" value="Enter your password" type="text">
>>>>>>> 4e90341cc623334e6cb207e8cd436011bd0e78fd
  <input value="Submit" type="submit"></form>
-->
</div>

</body></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <link rel="stylesheet" type="text/css" href="Login.css" />
    <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
    <title>Login</title>
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

</head>

<body>
    <h1> Welcome! </h1>
    
    <hr style="width: 100%; height: 2px;">
        
    <h2> Students: </h2>
    
    <div id = "logon">
    <form name="input" action="" method="get">
        Full name: <input name="Name" value="" type="text">
        <input value="Submit" type="submit">
    </form>
    </div>
    
    <br> <br>
    
    <h3> Teachers: </h3>

    <div id = "logon">
        <form action="passwordcheck.php" method="post">
            Password: <input type="password" name="mypassword">
            <input type=submit value="submit">
        </form>
    </div>
    
</body>

</html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
        <title>Student: Write your story!</title>
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        
        <style type="text/css">
            body {background-image:url("Background.png");}
        </style>
    </head>
	
<?php
	include ("functions.php");
	createStory("$_POST[storyname]", "$_POST[story]");
?>

    
    <body>
        <h1> Write New Story </h1>
        
        <form name="input" action="WebStoryTemplate.php" method="get">
            <input value="Write New Story" type="submit">
        </form>
        
        <h1> View Students </h1>
        
        <form name="input" action="" method="get">
            <input value="View Students" type="submit">
        </form>
		
		<h1> Logout </h1>
		
        <form name="input" action="Login.php" method="get">
            <input value="View Students" type="submit">
        </form>
        
    </body>
</html>
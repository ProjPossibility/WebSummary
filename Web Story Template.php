<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Web Story Template</title>
<link rel="stylesheet" type="text/css" href="SC12.css" />
</head>
<body>
<h1>Create a Web Story Template!</h1>

<hr style="width: 100%; height: 2px;">
<div id = "Story" >
<form name = "story" action = "Create_Story.php" method = "get">
<textarea name="story" rows="20" cols="80">
</textarea><br/>
Choose from a Category: <select name="Category">
<?php
$cars=array("Saab","Volvo","BMW","Toyota");
for($i = 0; $i < cars.length(); $i++)
{
	echo "<option value=" + $cars[$i] + ">" +$cars[$i]+"</option>";
}
?>
</select>

<input type="submit" value="Submit" />
</form>
</div>

</body></html>
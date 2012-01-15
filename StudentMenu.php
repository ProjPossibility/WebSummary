<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Student: Write your story!</title>

  <link rel="stylesheet" type="text/css" href="StudentView.css" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>

<?php

include("functions.php");
if(!isset($_GET['student']))
{
	echo "The data from the login page was not accessed correctly. Please see line 16 in the source";
}
//add the student to the DB (every time unfortunately)
addStudent($_GET['student']);
//echo $_POST['student'];
//var_dump($_GET);

?>


<h1> Write your story! </h1><br/>

<h2> Please select a story to display </h2>

<?php
//attempt to display all the stories
//this code is untested
$result = displayAllStories();

//the following function craetes the dynamic selection for the drop down
//this function needs to use mysql_fetch_assoc command
//if there is no time this list will be prepopulated
function generateSelect($name = '', $options = array()) {
	$html = '<select name="'.$name.'">';
	foreach ($options as $option =>$value) 
	{
		$html .= '<option value="'.$value.'">'.$option.'</option>';
	}
	$html .= '</select>';
	return $html;
}
?>

<form name="Menu" action = "editstory.php" method = "get">
<p align="center">
<?php
echo generateSelect('stories', $result);
?>
<input type="Submit" value="GO">
<input type="hidden" name="student" value="<?php
	echo $_GET['student'];
	?>">
</p>
</form>

<form name="Logout" action="Login.php" method="get">
<p align="center">
<input type="Submit" value="Log Out">
</p>
</form>



</body></html>
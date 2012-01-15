<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>Student: Write your story!</title>

  
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>
<body>

<?php

include("functions.php");
if(!isset($_POST['Name'])
{
	echo "The data from the login page was not accessed correctly. Please see line 16 in the source";
}
//add the student to the DB (every time unfortunately)
addNewStudent("$_POST['Name']");

?>


<h> Write your story! </h>

<h> Please select a story to display </h>

<?php
//attempt to display all the stories
//this code is untested
$result = displayAllStories();

//the following function craetes the dynamic selection for the drop down
//this function needs to use mysql_fetch_assoc command
//if there is no time this list will be prepopulated
function generateSelect($name = '', $options = array()) {
	$html = '<select name="'.$name.'">';
	foreach ($options as $option => $value) 
	{
		$html .= '<option value='.$value.'>'.$option.'</option>';
	}
	$html .= '</select>';
	return $html;
}
?>

<form name="Menu">
<p align="center">
<?php
generateSelect('stories', $result);
?>
<input type="button" onClick="getStory('document.Menu.stories.options[document.Menu.stories.selectedIndex].value;" value="GO">
</p>
</form>





</body></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<style type="text/css">
h1 {text-align: center;}
body {background-color:LightGrey;}
#newstory {margin: auto;
width:70%
}

</style>
</head>

<body>
<h1>Fill in the blanks!</h1>
<hr style="width: 100%; height: 2px;">
<div id = "newstory">

<form name = "FinalStory" action = "finalstory.php" method = "post">
<?php
$story = htmlspecialchars($_POST['story']);
$test = explode("@", $story);

for($i = 0; $i < count($test); $i++)
{
echo $test[$i];
	if($i < count($test)-1)
	{
	echo "<input type = 'text' name = 'name";
	echo $i;
	echo "' />";
	}
}

echo '<input type="hidden" name="story" value="';
echo $story;
echo '" />';

?>
<input type="submit" value="Submit" />
</form>

</div>

</body>
</html>

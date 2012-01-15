<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<style type="text/css">
h1 {text-align: center;}
body {background-color:LightGrey;}
#newstory {margin: auto;
width:70%
}
//#input {color:rgb(255,0,0)'}
</style>
</head>

<body>
<h1>Here's what you entered:</h1>
<hr style="width: 100%; height: 2px;">
<div id = "newstory">


<?php

$story = htmlspecialchars($_POST['story']);
$test = explode("@", $story);

for($i = 0; $i < count($test); $i++)
{
echo $test[$i];
	if($i < count($test)-1)
	{
	echo  $_POST["name$i"];;
	}
}

?>

</div>

</body>
</html>

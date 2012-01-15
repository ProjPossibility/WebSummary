<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<style type="text/css">
h1 {text-align: center;}
body{
	background:url('studentbackground.jpg');
    background-repeat:no-repeat;
    background-size:cover;
	}
#newstory {
	margin: auto;
	width:70%;
}
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

</div><br/>
<h1> Retry </h1>
<?php
		?>
        <form name="input" action="StudentMenu.php" method="get">
            <input value="Student Menu" type="submit">
			
			<input type="hidden" name="student" value="<?php
			echo $_POST['student'];
			?>">
        </form>

</body>
</html>

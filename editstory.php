<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
</head>

<body>


<?php

$story = htmlspecialchars($_POST['story']);
$test = explode("@", $story);

for($i = 0; $i < count($test); $i++)
{
echo $test[$i];
if($i < count($test)-1)
{
echo "<br/> <input type = 'text'/><br/>";
}
}

?>

</body>
</html>

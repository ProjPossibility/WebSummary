<html>
<body>

<?php
//functions.php



$con = mysql_connect('localhost', 'root' );
if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}
		
		
$db_selected = mysql_select_db("webstories", $con);
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}

//at this point DB should be connected and usable

	/*~~~REMEMBER TO ADD A GETSTUDENT AND GET STORIES BY CATEGORY FUNCTIONS~~~~*/

//pass a student name, adds that student to database
function addStudent($student_name)
{
		mysql_query("INSERT INTO students (name)
		VALUES ('$student_name')");
}


//Title and text are self explanatory
//certain categories will be built in
function createStory($story_title, $story_text, $story_category)
{
	//we need to put story_text into the DB
	//generate keys to differentiate story (autonumbering)
	mysql_query("INSERT INTO stories (storyID, content)
		VALUES ('$story_title', '$story_text')");
		//if it doesnt work, take sing quotes of story title
	mysql_query("INSERT INTO categories (categoryName, associatedStory)
		VALUES ('$story_category', '$story_title' )");
	
}

//story id refers to the title of the story
function getStory($story_id)
{
	$result = mysql_query("SELECT content FROM stories WHERE storyID='$story_id'");
	if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	if (mysql_num_rows($result) == 0) {
    echo "No rows found, nothing to print so am exiting";
    exit;
	}
	return $result;
	//while ($row = mysql_fetch_assoc($result)) {
	//	echo $row['content'];
		//remove echo and replace it with return so the other people can use this}
}

//THIS CURRENTLY PRINTS A LIST OF THE TITLES OF THE STORIES A STUDENT HAS COMPLETED
//OUR INTENTION IS TO INSTEAD MAKE IT RETURN AN ARRAY OF TITLES
//student_id refers to the student's name
function getHistory($student_id)
{
	$result = mysql_query("SELECT storiesRead FROM students Where name='$student_id'");
	if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}
	return $result;
	//while ($row = mysql_fetch_assoc($result)) {
	//	echo $row['storiesRead'];
		//remove echo and replace it with return so the other people can use this}
		
	
}

	//Does not return categories
function displayCategories()
{
	$result = mysql_query("SELECT categoryName FROM categories");
	if (!$result) {
		$message  = 'Invalid query: ' . mysql_error() . "\n";
		$message .= 'Whole query: ' . $query;
		die($message);
	}

	return $result;
	//while ($row = mysql_fetch_assoc($result)) {
	//	echo $row['categoryName'];
		//remove echo and replace it with return so the other people can use this}
		
	
}

function displayAllStories()
{
	$resultList = array();
	$result = mysql_query("SELECT storyID FROM stories");
	while($row = mysql_fetch_assoc($result))
	{
	array_push($resultList, $row['storyID']);
	}
	return $resultList;
}

function addNewCategory($title)
{
	mysql_query("INSERT INTO categories (categoryName)
		VALUES ($title)");	
}





?>

</body>
</html>
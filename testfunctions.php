<html>
<body>


<?php

include("functions.php");
//echo "<br />"; //for blank line


//add some students
addStudent("Bob");
addStudent("John");
addStudent("test");




//test category related functions
addNewCategory("Social");
addNewCategory("Random");
echo "The following lines display the available categories <br />";
displayCategories();
echo "<br />";

//createStory takes 3 parameters, the title, the story text, and the story category
createStory("Story A", "The teacher needs to enter the data so it can become a story", "Random");
createStory("Story B", "This is the second story that recreates a social situation to learn from", "Social");


//display a story


getStory("Story A");
echo "<br />";
getStory("Story B");
echo "<br />";


//getHistory
getHistory("Bob");





?>

</body>
</html>




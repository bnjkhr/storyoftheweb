<?php 

include 'config.php';


mysql_select_db(story_test);

$text = $_POST['story']; 


mysql_query("INSERT INTO user_story (usr_txt) VALUES ('$text')");

echo $text;

?>
<?php 

include 'config.php';


mysql_select_db(story_test);

$text = $_POST['story'];

$replace_me = array("Arsch", "Penner");
$replacers = ("(Schimpfwort!)");
$newstr = str_replace($replace_me, $replacers, $text);

	


mysql_query("INSERT INTO user_story (usr_txt) VALUES ('$newstr')");

?>
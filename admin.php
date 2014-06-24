<?php
include 'config.php';
mysql_select_db(story_test);

$query = "SELECT * FROM user_story";
 
$result = mysql_query($query);
  while ($row = mysql_fetch_array($result))
{
    echo "Story: ". $row[usr_txt];
    echo "<br>";
    echo "Timestamp: ". $row[timestamp];
    echo "<br>";
  }
?>
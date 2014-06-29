<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
        <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Ubuntu:300,400,700|Oswald:400,700,300|Open+Sans:400,600,700,300|Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>

    </head>
    <body>

    <?php 

include 'config.php';


mysql_select_db(story_test);

$text = $_POST['story'];

$replace_me = array("Arsch", "Penner");
$replacers = ("(Schimpfwort!)");
$newstr = str_replace($replace_me, $replacers, $text);

	


mysql_query("INSERT INTO user_story (usr_txt) VALUES ('$newstr')");
mysql_close();

?>
        
   <div class="viewport">

   <h1>Vielen Dank!<br>Dein Satz wurde gespeichert.</h1><br>
   <h2>Du bist nun ein Teil unserer Story.</h2><br>
   <h2>Hier geht's <a href="http://localhost:8888/storyoftheweb/index.php">zurück</a>.</h2>
   </div>
    </body>
</html>


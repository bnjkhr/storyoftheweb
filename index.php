<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="The Story of the web">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>The story of the web</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
		<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700|Ubuntu:300,400,700|Oswald:400,700,300|Open+Sans:400,600,700,300|Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="TimeCircles.js"></script>
		<link href="TimeCircles.css" rel="stylesheet">   

    </head>
    <body>
     

	<div class="viewport">
        <h1>Ein Satz. Unsere Geschichte.</h1>
        <h2>Schreibe Deinen.</h2>
        <form action="save.php" method="POST">
        <input name="story" type="text" maxlength="150" placeholder="Du hast 150 Zeichen. Mach was draus!">
        <button class="button">Dein Satz zu unserer Story!</button>
        </form>
		
		<div class="time" data-date="2014-10-01 00:00:00"></div>	

		<script>
		$(".time").TimeCircles(); 	
		</script>

	<?php 
	require_once 'config.php';
	mysql_select_db(story_test);
	$query = "SELECT usr_txt FROM user_story ORDER BY id DESC LIMIT 0,1";
	$resultID = mysql_query($query);

	while ($row = mysql_fetch_assoc($resultID)) {
    $teile = explode(" ", $row["usr_txt"]);
    $last = array_pop($teile);
}



	?>

	<div class="text">Der letzte Satz endete mit: <span id="info"><?php echo $last; ?></span></div>	

	</div>

	

    </body>
</html>
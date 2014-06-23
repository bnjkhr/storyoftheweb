<?php 

// MYSQL-Connect

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Sorry, unsere Datenbank ist gestorben. Wir beleben sie so schnell wie möglich wieder.  ' . mysql_error());
}
echo 'Erfolgreich verbunden';



?>
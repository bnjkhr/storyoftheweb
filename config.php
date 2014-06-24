<?php 

// MYSQL-Connect

$link = mysql_connect('localhost', 'root', 'root');
if (!$link) {
    die('Sorry, unsere Datenbank ist gestorben. Wir beleben sie so schnell wie möglich wieder.  ' . mysql_error());
}
mysql_query("SET NAMES 'utf8'");
mysql_query("SET CHARACTER SET 'utf8'");



?>
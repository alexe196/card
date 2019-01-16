<?php
//ini_set('display_errors','Off');
$mysql_database="dasha_blog_kl_com_ua";
$mysql_username="dashablog";
$mysql_password="AQz3W7l*[]";
$mysql_host="mysql.zzz.com.ua";

$mysql_connect = mysql_connect($mysql_host, $mysql_username, $mysql_password) or die("Could not connect: " . mysql_error());
mysql_select_db($mysql_database);
mysql_set_charset( 'utf8' );



date_default_timezone_set('Europe/Kiev');
?>
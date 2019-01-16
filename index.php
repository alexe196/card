<?php
include($_SERVER['DOCUMENT_ROOT'].'/connect.php');
include($_SERVER['DOCUMENT_ROOT'].'/class/db.class.php');
include($_SERVER['DOCUMENT_ROOT'].'/model/data.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="admin" />
    <link href="//<?=$_SERVER['HTTP_HOST']?>/tamplete/css/main.css" type="text/css" rel="stylesheet">
    <link href="//<?=$_SERVER['HTTP_HOST']?>/tamplete/css/sort.css" type="text/css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="//<?=$_SERVER['HTTP_HOST']?>/tamplete/js/script.js"></script>
    <script src="//<?=$_SERVER['HTTP_HOST']?>/tamplete/js/sort.js"></script>
	<title>CARD</title>
</head>

<body>
<?php
 include($_SERVER['DOCUMENT_ROOT'].'/controler.php'); 
?>

<div id="wait" style="display: none;"><div></div></div>
</body>
</html>
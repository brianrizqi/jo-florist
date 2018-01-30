<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 

	$password = 'adminjoflorist';
	$text ='halo saya mau pesan bunga';
	echo $password."<br>";
	echo md5($password)."<br>";
	echo $text."<br>";
	echo rawurlencode($text);


	?>
</body>
</html>

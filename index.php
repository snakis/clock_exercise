<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Samantha Nakis Clock Example</title>
	<?php require 'logic.php'; ?>

<style>
	body{
		background-color: <?=$background_color?>;
		text-align: center;
	}
</style>
</head>

<body>
	<h1>
	<?="It is $current_hour:$current_min"?>
	</h1>
	<h3>
	<?="Time zone: $time_zone_name"?>
	</h3>
	<img id= "time_pic" src= <?=$picture_url?> alt="Picture for time">
</body>
</html>

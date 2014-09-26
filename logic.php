<?php

	date_default_timezone_set('America/New_York');
	$current_hour = date('G'); //hour in 24 hour format
	$current_min = date('i'); //time to display
	$date = date_create(null);
	$time_zone = date_timezone_get($date);
	$time_zone_name = timezone_name_get($time_zone);

	$base_url = 'http://making-the-internet.s3.amazonaws.com/';

	if($current_hour>=5 && $current_hour<11){ //morning
		$picture_url = $base_url.'php-morning.png';
		$background_color = '#865f86';
	}
	elseif($current_hour>=11 && $current_hour<16){ //afternoon
		$picture_url = $base_url.'php-afternoon.png';
		$background_color = '#2c87c8';
	}
	elseif($current_hour>=16 && $current_hour<20){ //evening
		$picture_url = $base_url.'php-evening.png';
		$background_color = '#c7b02f';
	}
	elseif($current_hour>=20 || $current_hour<5){ //night
		$picture_url = $base_url.'php-night.png';
		$background_color = '#180629';
	}
	else{
		$picture_url = 'ERROR'; //return error if no match
		$background_color = '#ffffff'; //set to white if error
	}

?>
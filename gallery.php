<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width" />
	<title>laydros.org - gallery</title>
	<link rel="icon" href="favicon.ico" TYPE="image/x-icon">
	<style type="text/css" media="all"> 
		@import "mainstyle.css";
	</style>
	<script src="jquery.js"></script>
	<script src="/gallery/galleria/src/galleria.js"></script>
</head>

<body>
	<?php
		include("header.inc");
	?>
	
	<div id="galleria">
		<img src="pictures/PeppersAtPikes-8231.jpg">
		<img src="pictures/Seattle-1616.jpg">
		<img src="pictures/Seattle-1597.jpg">
		<img src="pictures/car_aged.jpg">
		<img src="pictures/couple_wash_monument.jpg">
		<img src="pictures/kids_at_pullen.jpg">
		<img src="pictures/rail-flower.jpg">
		<img src="pictures/trees_at_nortel.jpg">
		<img src="pictures/walking_on_dirt_road.jpg">
		<img src="pictures/ijv-reflection-only.jpg">
		<img src="pictures/gull-in-flight.jpg">
		<img src="pictures/window_with_background-0498.jpg">
	</div>
    <script>
    // Load the classic theme
    Galleria.loadTheme('gallery/galleria.classic.js');
    // Initialize Galleria
    $('#galleria').galleria();
    </script>
	<br />
	
	<?php
		include("footer.inc");
	?>
</body>
</html>
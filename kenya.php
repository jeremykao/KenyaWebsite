<?php //instantiate variables
$mainPictureName = "Kenya Overview";
$mainPicturePhoto = "kenya_photo.jpg";
$mainPicturePost = "Mbita, Kenya is a beautiful, small rural city by Lake Victoria, and its
	location is prime for placing photovoltaic cells. As primarily
	a fishing and farming village, children only attend school for 8 years on average
	while technology and power are not widely available.";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>About | Kenya Solar Power Demonstration Project</title>
		<link rel="stylesheet" type="text/css" href="global.css">
	</head>
	<body id="Kenya">
		<div id="banner">
			<?php include('banner.php'); ?>
		</div>
		<div id="navBar">
			<?php include('navBar.php'); ?>
		</div>
		<div id="mainContainer">
			<div id="mainContent">
				<h2>Kenya</h2>
			</div>
			<?php include('mainPicture.php'); ?>
			<?php include('updatePanel.php'); ?>
		</div>
		
		<div id="footer">
			<h3>2012 Kenya Solar Power. All Rights Reserved</h3>
		</div>
	</body>
</html>
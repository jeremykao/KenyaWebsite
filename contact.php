<?php //instantiate variables
$mainPictureName = "Project Overview";
$mainPicturePhoto = "overview_photo.jpg";
$mainPicturePost = "The Kenya Solar Power Demonstration Project aims to design and build a solar
		array for a technology and learning center in Mbita, Kenya. In addition, this
		project plans to provide the community with educational materials as part of its
		goal of creating a sustainable, growing economy.";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Contact | Kenya Solar Power Demonstration Project</title>
		<link rel="stylesheet" type="text/css" href="global.css">
	</head>
	<body id="Contact">
		<div id="banner">
			<?php include('banner.php'); ?>
		</div>
		<div id="navBar">
			<?php include('navBar.php'); ?>
		</div>
		<div id="mainContainer">
			<div id="mainContent">
				<h2>Contact</h2>
				<div id="contact">
				<p>You may contact us by email. Our email is </h3><a href="mailto:solar.outreach@gmail.com">solar.outreach@gmail.com</a>
					We appreciate all help we can get, and thanks for making the world a brighter place.
				</p>
				</div>
			</div>
			<?php include('mainPicture.php'); ?>
			<?php include('updatePanel.php'); ?>
		</div>
		
		<div id="footer">
			<h3>2012 Kenya Solar Power. All Rights Reserved</h3>
		</div>
	</body>
</html>
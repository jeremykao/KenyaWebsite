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
		<title>Kenya Solar Power Demonstration Project</title>
		<link rel="stylesheet" type="text/css" href="global.css">
	</head>
	<body id="Home">
		<div id="banner">
			<?php include('banner.php'); ?>
		</div>
		<div id="navBar">
			<?php include('navBar.php'); ?>
		</div>
		<div id="mainContainer">
			<div id="mainContent">
				<h2>Who are we?</h2>
				<p>We are a group of students from the <a href="http://ucsd.edu">
					University of California, San Diego</a> with a passion of helping others while applying what we
					have learned in the classroom. Part of a larger program
					called <a href="http://globalties.ucsd.edu">Global TIES (Teams In Engineering Service)</a>, the Kenya
					Solar Power Demonstration Project works with <a href="http://www.ewb-sandiego.org/">Engineers without
					Borders</a> in constructing a Technology and Learning Center 
					in <a href="kenya.php">Mbita, Kenya</a>. 
				</p>
				<h2>What do we do?</h2>
				<p>Since most people in Mbita, Kenya lack reliable power, computer access, and internet
					connectivity, do not stay in the education system for long, and have little
					opportunity to overcome poverty, we focus our efforts on community development
					centered around the Technology and Learning Center. We work on <a href="subteams.php#prototyping">designing 
					portable solar panels</a>, <a href="subteams.php#datalogging">building a 
					system to record and analyze the outputs of the solar array</a>, 
					<a href="subteams.php#outreach">developing educational materials 
					for the community</a>, and planning ways to create a more sustainable, growing economy.
					Since we plan on making a few implementation trips to Kenya, we also have a fundrasing
					team that helps us overcome the costs of travel along with funding our primary expenses
					in solar panel materials and sensors. We believe that technology and the internet will
					provide them with a vast amount of educational resources, and with our educational materials,
					we believe these resources will allow the people to rise out of poverty and strengthen
					the economy.
				</p>
				<h2>How can you help?</h2>
				<p>You may provide us with monetary or material (solar panels, sensors, tools) donations, knowledge, or contacts.
					If you have could provide us with any of the above, please <a href="contact.php">contact us</a>. Any help would
					be greatly appreciated! Thanks!
				
				</p>
			</div>
			<?php include('mainPicture.php'); ?>
			<?php include('updatePanel.php'); ?>
		</div>
		
		<div id="footer">
			<h3>2012 Kenya Solar Power. All Rights Reserved</h3>
		</div>
	</body>
</html>
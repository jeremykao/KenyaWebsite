<?php //instantiate variables
	$mainPictureName = "Subteams Overview";
	$mainPicturePhoto = "team_photo.jpg";
	$mainPicturePost = "The Kenya Solar Power Demonstration Project consists of five
		different subteams: Prototyping, Datalogging, Fundraising, Outreach, and 
		Structural. Members consist of UCSD students with majors such as Computer
		Science, Mechanical, Structural, Electrical, Computer, and Nano- Engineering.";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Subteams | Kenya Solar Power Demonstration Project</title>
		<link rel="stylesheet" type="text/css" href="global.css">
	</head>
	<body id="Subteams">
		<div id="banner">
			<?php include('banner.php'); ?>
		</div>
		<div id="navBar">
			<?php include('navBar.php'); ?>
		</div>
		<div id="mainContainer">
			<div id="mainContent">
				<h2>Subteams</h2>
				<div id="prototyping">
					<h3>Prototyping: </h3>
					<p>This subteam designs and constructs portable solar panels to be used
					in Mbita, Kenya. With the solar panels it creates, the prototyping team also builds educational materials
					to teach students about photovoltaic technology. Some of the fabrication steps of the solar panel include
					solar cell testing, solar cell tabbing, creating the aluminum frame, securing the glass panel, applying
					weather sealing and proofing, and wiring and intefacing.</p>
					<img src="prototyping.jpg" alt="Prototyping team and a cell." width="120px" height="138px" class="postPhoto" /> 
				</div>
				<div id="datalogging">
					<h3>Datalogging: </h3>
					<img src="datalogging.jpg" alt="The Datalogger." width="125px" height="155px" class="postPhoto" /> 
					<p>In order to ensure sustainability of the photovoltaic array, this subteam creates a system to monitor the
						outputs of the solar array. Using a Arduino microcontroller, ACS714 current
						sensors, TMP102 temperature sensors, and a DS1307 Real-Time Clock Module, we measure the temperature,
						current, and voltage of the array and record the data onto a MicroSD card. The system is mostly complete,
						as calibration and testing are the next steps. The datalogging team is also looking to build an error-detection
						system to identify panels that are bringing down the efficiency of the whole array.</p>
				</div>
				<div id="outreach">
					<h3>Outreach: </h3>
					<p>The Outreach team aims to devise plans for community development. Most of the efforts of community development
						have been focused on education, agriculture, and health. This team thinks long-term and hopes to create a plan
						to boost the economy.</p>
				</div>
				<div id="structural">
					<h3>Structural: </h3>
					<p>This new subteam works with the structural team from Engineers Without Borders to create the support for the
						solar array to be deployed in Mbita, Kenya.</p>
				</div>
				<div id="fundraising">
					<h3>Fundraising: </h3>
					<p>The fundraising team connects with corporate sponsors and donors to bring in extra funds to support the costs of
						solar panels, sensors, travel costs for the implementation trip, and more. If you would like to help, please 
						<a href="contact.php">contact us</a>.</p>
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
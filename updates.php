<?php //instantiate variables
$mainPictureName = "Project Overview";
$mainPicturePhoto = "overview_photo.jpg";
$mainPicturePost = "The Kenya Solar Power Demonstration Project aims to design and build a solar
		array for a technology and learning center in Mbita, Kenya. In addition, this
		project plans to provide the community with educational materials as part of its
		goal of creating a sustainable, growing economy.";
		
require ('login.php');
include_once ('functions.php');

if ($_GET['title'])
{
   $title = $_GET['title'];
}
else
{
   $title = "Updates";
}
?>

<!DOCTYPE html>
<html>
	<head>
		<?php echo"<title>$title | Kenya Solar Power Demonstration Project</title>";?>
		<link rel="stylesheet" type="text/css" href="global.css">
	</head>
	<body id="Updates">
		<div id="banner">
			<?php include('banner.php'); ?>
		</div>
		<div id="navBar">
			<?php include('navBar.php'); ?>
		</div>
		<div id="mainContainer">
			<div id="mainContent">
				<div id="posts">
				<h2>Posts about our Progress</h2>
				<?php 
					require ('login.php');
					include_once ('functions.php');
					
					if ($_GET['title'] == 'archives')
					{
						produceArchives($db_database);
					}
					else if ($_GET['title'] &&  $_GET['year'])
					{
						$getPostsQ = "SELECT title,month,day, year,content FROM $_GET[year] WHERE title='$_GET[title]'";
						$getPostsR = mysql_query($getPostsQ);
						$postRow = mysql_fetch_assoc($getPostsR);
						echo "
						<div id=\"updates_post\">
						<h3>$postRow[title]</h3>
						<h4>Posted on $postRow[month] $postRow[day], $postRow[year]</h4>
						<p>$postRow[content]</p>
						 </div>
						 ";
						
					}
					else
					{
						createPosts($dateYear);
					}
				?>
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
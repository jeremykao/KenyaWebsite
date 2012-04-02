<?php //functions.php
function createTable($year)
{
   $columns = 'id MEDIUMINT UNSIGNED AUTO_INCREMENT, month VARCHAR(10), day SMALLINT(2), title VARCHAR(64),year VARCHAR(4), content TEXT, PRIMARY KEY(id)';
   $createTableR = mysql_query("CREATE TABLE $year ($columns) ENGINE MyISAM") or die("Cannot Create table $year - ". mysql_error());
}
function insertPost($table, $month, $day, $title, $year, $content)
{
   $insertQuery = "INSERT INTO $table (month,day,title,year,content) VALUES('$month',$day,'$title','$year','$content')";
   $insertResult = mysql_query($insertQuery) or die("Cannot insert post into $table - ". mysql_error());
}
function createPosts($dateYear)
{
   $getPostsQ = "SELECT title,month,day, year,content FROM $dateYear ORDER BY id DESC LIMIT 5";
   $getPostsR = mysql_query($getPostsQ);
   $countRows = mysql_num_rows($getPostsR);
   
   for ($z = 0; $z < $countRows; $z++)
   {
     $postRow = mysql_fetch_assoc($getPostsR);
     echo "
     <div id=\"updates_post\">
       <h3>$postRow[title]</h3>
       <h4>Posted on $postRow[month] $postRow[day], $postRow[year]</h4>
       <p>$postRow[content]</p>
     </div>
	 ";
   }
}
function produceArchives($db_database)
{
	$getYearsQ = "SHOW TABLES FROM $db_database";
	$getYearsR = mysql_query($getYearsQ);
	$countYears = mysql_num_rows($getYearsR);
	echo "<ul>";
	for($i = 0; $i < $countYears; $i++)
	{
		$yearRow = mysql_fetch_row($getYearsR);
		$year = substr($yearRow[0],4);
		echo "<li>$year</li><ul>";
		$getPostsQ = "SELECT title FROM $yearRow[0]";
		$getPostsR = mysql_query($getPostsQ);
		$countPosts = mysql_num_rows($getPostsR);
		for ($z = 0; $z < $countPosts; $z++)
		{
			$postRow = mysql_fetch_row($getPostsR);
			echo "<a href=\"updates.php?title=$postRow[0]&year=$yearRow[0]\" class=\"archiveLinks\">$postRow[0]</a><br />";
		}
		echo "</ul>";
	}
	echo "</ul>";
}
function displayDelete($db_database)
{
	$getYearsQ = "SHOW TABLES FROM $db_database";
	$getYearsR = mysql_query($getYearsQ);
	$countYears = mysql_num_rows($getYearsR);
	echo "<form method=\"post\"><ul>";
	for($i = 0; $i < $countYears; $i++)
	{
		$yearRow = mysql_fetch_row($getYearsR);
		$year = substr($yearRow[0],4);
		echo "<li>$year</li><ul>";
		$getPostsQ = "SELECT title FROM $yearRow[0]";
		$getPostsR = mysql_query($getPostsQ);
		$countPosts = mysql_num_rows($getPostsR);
		for ($z = 0; $z < $countPosts; $z++)
		{
			$postRow = mysql_fetch_row($getPostsR);
			echo "<li><label><input type=\"checkbox\" name=\"toBeDeleted[]\" value='$yearRow[0]$postRow[0]' />$postRow[0]</label></li>";
		}
		echo "</ul>";
	}
	echo "</ul><input type=\"submit\" name=\"deletePosts\" value=\"Delete Posts\" /></form>";
}
function deleteFromDatabase($postTitle,$postYear)
{
	$deletePostQuery = "DELETE FROM $postYear WHERE title='$postTitle'";
	$deletePostResult = mysql_query($deletePostQuery);
}
<?php //admin.php

require ('login.php');
include_once ('functions.php');

echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Create New Post | JeremyKao.com</title>
  </head>
  <body>
    <form method=\"post\">
      <label for=\"titleIn\">Title: </label>
	  <input type=\"text\" name=\"title\" id=\"titleIn\" />
	  <br />

	  <label for=\"contentIn\">Content: </label>
	  <br />
	  <textarea rows=\"12\" cols=\"100\" name=\"content\" id=\"contentIn\"></textarea>
	  <br />
	  <br />
	  
	  <input type=\"submit\" value=\"Create a Post\" />
	  </form>
	  <form method=\"post\">
		<input type=\"submit\" name=\"deletePost\" value=\"Delete a Post\" />
	  </form>
	  
   </body>
</html>";
/*** DELETE POSTS ***/
if ($_POST['deletePost']) displayDelete($db_database);
if ($_POST['deletePosts'])
{
	$postsToDelete = $_POST['toBeDeleted'];
	for ($num = 0; $num < sizeof($postsToDelete); $num++)
	{
		$postTitle = substr($postsToDelete[$num], 8);
		$postYear = substr($postsToDelete[$num], 0, 8);
		deleteFromDatabase($postTitle, $postYear);
	}
} 
/***END DELETE POSTS ***/
if ($_POST['title'])
{
   //set Variables
   $title = $_POST['title'];
   $year = substr($dateYear,4,4);
   $content = $_POST['content'];
   
   //Check to see if necessary to create tables
   $showTablesQ = mysql_query("SHOW TABLES FROM $db_database");
   $numTables = mysql_num_rows($showTablesQ);
   
   //echo "$title, $date, $content, $numTables     $dateYear, $dateDate, $dateMonth";
   
   if ($numTables == 0)
   {
      createTable($dateYear);
	  //echo 'im in';
   }
   else
   {
	  $count = 0;
      for ($i = 0; $i < $numTables; $i++)
      {
         $row = mysql_fetch_row($showTablesQ);
	     //echo '<br><br>INSIDE THE FOR LOOP!!!!';
         if ($dateYear == $row[0])
	     {
	        $count++;
		    //echo '<br><br>created tables!!!!';
	     }
      }
	  if ($count == 0)
	  {
		createTable($dateYear);
	  }
   }
   $db_table = $dateYear;

   //insert post into correct table
   insertPost($db_table, $dateMonth, (Integer) $dateDate, $title, $year, $content);
}
?>
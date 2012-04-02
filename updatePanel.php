<div id="updates">
	<h2>Updates</h2>
	<?php
		require('login.php');
		$getPostsQ = "SELECT title FROM $dateYear ORDER BY id DESC LIMIT 10";
		$getPostsR = mysql_query($getPostsQ);
		$countRows = mysql_num_rows($getPostsR);
   
		for ($z = 0; $z < $countRows; $z++)
		{
			$postRow = mysql_fetch_row($getPostsR);
			echo "
			<a href=\"updates.php?title=$postRow[0]\" class=\"archiveLinks\">$postRow[0]</a><br />
			";
		}
	?>
	<h2><a href="updates.php?title=archives">Go to Archives</a></h2>
</div>
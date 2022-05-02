<?php

  $filename = "painting.txt";
  $paintings = file($filename);
  
  echo "<html>";
  echo "<body>";
  echo "<table align = 'center' border = '1' style = 'border-collapse:collapse;padding:40px;'>";
  echo "<caption>19th Century French Paintings</caption>";
  echo "<tr><th>ID</th><th>Artist</th><th>Title</th><th>Year</th></tr>";
  
  foreach ($paintings as $painting) {

		$paintingFields = explode(",", $painting);
		$id= $paintingFields[0];
		$artist = $paintingFields[1];
		$title = $paintingFields[2];
		$year = $paintingFields[3];
	echo "<tr><td>$id</td><td>$artist</td><td>$title</td><td>$year</td></tr>";
		
}
echo "</table>";
echo "</body>";
echo "</html>";
?>

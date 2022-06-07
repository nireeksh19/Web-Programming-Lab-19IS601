<?php
$name=$_POST['name'];
$basic=$_POST['basic'];
$da=$_POST['da'];
$hra=$_POST['hra'];
$new_da=$basic * 0.01 * $da;
$new_hra=$basic *0.01 *$hra;
$totalpay = $basic +$new_hra+$new_da;

 echo "<html>";
 echo "<body>";
 echo "<table align='center' border='2'>";
 echo "<tr><th>Name :</th><th>$name</th></tr>";
 echo "<tr><th>Basic Pay :</th><th>$basic</th></tr>";
 echo "<tr><th>DA :</th><th>$new_da</th></tr>";
 echo "<tr><th>HRA :</th><th>$new_hra</th></tr>";
 echo "<tr><th>Total Pay :</th><th>$totalpay</th></tr>";
 echo "</table>";
 echo "</body>";
 echo "</html>";
 ?>
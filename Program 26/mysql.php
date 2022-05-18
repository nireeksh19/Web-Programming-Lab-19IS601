<?php
 //create connection
 $connect=mysqli_connect('172.16.2.3','student','student','student');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
	echo 'Connected Successfully!!';
?>

  <html>
  <body>
  <h2>Enter Data</h2>
  <form  id = "myform" action="mysql.php" method="post" >
  		<label for="fname">Name:</label><br>
  		<input type="text" id="fname" name="fname"><br>
  		<label for="ssn">SSN:</label> <br>
  		<input type="text" id="ssn" name="ssn" ><br>
		<label for="age">AGE:</label> <br>
  		<input type="text" id="age" name="age" ><br>
		<label for="salary">SALARY:</label> <br>
  		<input type="text" id="salary" name="salary" ><br>
		<label for="city">CITY:</label> <br>
  		<input type="text" id="city" name="city" ><br><br>

  		<input type="submit" value="Submit">
	</form>  

<?php

if (isset($_POST['fname']) and isset($_POST['ssn']) and isset($_POST['age']) and isset($_POST['salary'])   and isset($_POST['city'])) {
	$name =  $_POST["fname"];
	$ssn =  $_POST["ssn"];
	$age =  $_POST["age"];
	$salary =  $_POST["salary"];
	$city =  $_POST["city"];	

	$sql = "INSERT INTO Person102(name,ssn,age,salary,city) VALUES ('" . $name. "','". $ssn . "'," . $age . "," . $salary . ",'" .  $city . "')";

	if ($connect->query($sql) === TRUE) {
 		 echo "New record created successfully";
	} else {
 		 echo "Error: " . $sql . "<br>" . $connect->error;
	}
}

?>
  <table align = 'center' border = '1' style = 'border-collapse:collapse;padding:40px;'>
  <caption>Employees Data</caption>
  <tr><th>Name</th><th>SSN</th><th>Age</th><th>Salary</th><th>City</th></tr>

<?php

$result=mysqli_query($connect,"select * from Person102");

while($row=mysqli_fetch_array($result))
{

	$name = $row['name'];
	$ssn = $row['ssn'];
	$age = $row['age'];
	$salary = $row['salary'];
   $city = $row['city'];

   echo "<tr><td>$name</td><td>$ssn</td><td>$age</td><td>$salary</td><td>$city</td></tr>";
 
}
$connect->close();
?>

</table>
</body>
</html>


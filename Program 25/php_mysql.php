<?php
$connect=mysqli_connect('172.16.2.3','student','student','student');
//check connection
if(mysqli_connect_errno($connect))
{
echo 'Failed to connect to database: '.mysqli_connect_error();
}
else
echo 'Connected Successfully!!<br/>';
$result=mysqli_query($connect,"select * from Person_102");
echo "<html>";
echo "<body>";
echo "<table align = 'center' border = '1' style = 'border-collapse: collapse; padding:40px;'>";
echo "<caption>Employess data</caption>";
echo "<tr><th>Name</th><th>SSN</th><th>Age</th><th>Salary</th><th>City</th></tr>";
while($row=mysqli_fetch_array($result))
{
$name = $row['name'];
$ssn = $row['ssn'];
$age = $row['age'];
$salary = $row['salary'];
$city = $row['city'];
echo "<tr><th>$name</th><th>$ssn</th><th>$age</th><th>$salary</th><th>$city</th></tr>";
}
echo "</table>";
echo "</body>";

echo "</html>";
?>
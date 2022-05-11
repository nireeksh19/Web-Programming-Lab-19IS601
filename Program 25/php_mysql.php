//connect connection
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
while($row=mysqli_fetch_array($result))
{
echo $row['name'].' '.$row['SSN'].' '.$row['age'].' '.$row['salary'].' '.$row['city'].'<br/>';
}
?>
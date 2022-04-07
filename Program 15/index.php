<!-- 15. Write a PHP script to generate the following output
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5 -->

<?php
for($a=1; $a<=5; $a++)
{
 for($b=1; $b<=$a; $b++)
{
echo "$b";
}
echo "<br>";
}
?>
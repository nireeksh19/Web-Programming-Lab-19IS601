<html>
    <head>
        <title>Program 22</title>
    </head>
    <body>
    <?php
$myfile = fopen("newfile.txt", "w") or die("Unable to open 
file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt= readline('Enter a string: '); 
fwrite($myfile, $txt);
fclose($myfile);
?>

    </body>
</html>
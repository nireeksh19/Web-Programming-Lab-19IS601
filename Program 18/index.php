<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <h2>Please input your name:</h2>
        <input type="text" name="name">
        <input type="password" name="Password">
        <input type="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST["name"]) &&  isset($_POST["Password"] ) ){
    $name = $_POST["name"];
    $Password = $_POST["Password"];

    echo "<h3> Hello $name";
    }
    ?>
</body>
</html>
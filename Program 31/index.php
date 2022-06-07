<html>
    <head>
        <title>Password validation using php</title>
    </head>
    <body>
        <form method="post">
            <label>Name :</label>
            <input type="text" name="name"><br>
            <label>Enter Password :</label>
            <input type="password" name="pass"><br>
            <label>Confirm Password :</label>
            <input type="password" name="repass"><br>
            <input type="submit"><br>
            <?php
            if(isset($_POST['name'])){
                if(!($_POST['pass']===$_POST['repass'])){
                    echo "Password doesn't match";
                }
                else{
                    echo "password matched";
                }
            }
            ?>
        </form>
    </body>
</html>
<?php
setcookie("user","Nireeksh");
?>
<html>
    <body>
        <?php
        if(!isset($_COOKIE["user"])){
            echo "Sorry cookie not found";
        }else{
            echo "Cookie value: ". $_COOKIE["user"];
        }
        ?>
    </body>
</html>
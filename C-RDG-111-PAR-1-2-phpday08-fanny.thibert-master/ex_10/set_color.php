<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php 
    setcookie("background_color", $_POST["background"], time() + 365*24*3600);
    if(!$_POST["background"])
    {
    ?>
        <form method="POST">
        <p>background <input type="text" name="background"/></p>
        <p><input type="submit" value="Submit"></p>
        </form>
    <?php
    }
    elseif($_POST["background"])
    {
        if($_POST["background"] == "white" || $_POST["background"] == "black" || $_POST["background"] == "red" || $_POST["background"] == "blue")
        {   
            $_COOKIE["background_color"] = $_POST["background"]; 
            header("Location: http://localhost:4444/show_color.php");
            exit;
        }
        else
        {
            unset($_COOKIE["background_color"]);
            echo "Invalid color";
            ?>
                <form method="POST">
                <p>background <input type="text" name="background"/></p>
                <p><input type="submit" value="Submit"></p>
                </form>
            <?php
        }
    }
    ?>
    </body>
</html>
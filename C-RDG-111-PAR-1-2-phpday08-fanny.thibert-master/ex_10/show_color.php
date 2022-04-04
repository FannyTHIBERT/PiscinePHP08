<?php
if(!isset($_COOKIE["background_color"]) || ($_COOKIE["background_color"] !== "white" && $_COOKIE["background_color"] !== "black" && $_COOKIE["background_color"] !== "red" && $_COOKIE["background_color"] !== "blue"))
{
    header("Location: http://localhost:4444/set_color.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            
            if(isset($_COOKIE["background_color"]) && $_COOKIE["background_color"] == "white")
            {
                    ?>
                    <body style = "background-color:white">
                    <?php
            }
            elseif(isset($_COOKIE["background_color"]) && $_COOKIE["background_color"] == "black")
            {
                    ?>
                    <body style = "background-color:black">
                    <?php
            }
            elseif(isset($_COOKIE["background_color"]) && $_COOKIE["background_color"] == "red")
            {
                    ?>
                    <body style = "background-color:red">
                    <?php
            }
            elseif(isset($_COOKIE["background_color"]) && $_COOKIE["background_color"] == "blue")
            {
                    ?>
                    <body style = "background-color:blue">
                    <?php
            }
        ?>
    </body>
</html>
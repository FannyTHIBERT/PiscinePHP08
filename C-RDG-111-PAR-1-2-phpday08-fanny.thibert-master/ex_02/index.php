<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
            if(htmlspecialchars($_GET["name"]))
            {
                echo "Hello " . htmlspecialchars($_GET["name"]);
            }else{
                echo "Hello platypus";
            }
        ?>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
    <?php if(!htmlspecialchars($_POST["name"])){
    ?>
        <form method="post">
        <p>name <input type="text" name="name"/></p>
        <p><input type="submit" value="Submit"></p>
        </form>
    <?php
    }elseif(htmlspecialchars($_POST["name"])){
    
         echo "Hello " . htmlspecialchars($_POST["name"]);
    }
    ?>
    </body>
</html>
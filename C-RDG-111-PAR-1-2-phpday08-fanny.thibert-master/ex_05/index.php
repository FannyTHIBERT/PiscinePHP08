<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php  
            setcookie("name",$_GET["name"], time() + 365*24*3600);
            if($_GET["name"])
            {  
                $_COOKIE["name"] = $_GET["name"];
                echo "Hello " . $_COOKIE["name"];
                
            }elseif(!$_GET["name"] && isset($_COOKIE["name"]))
            {
                echo "Hello " . $_COOKIE["name"]; 
            }
            else
            {
                echo "Hello platypus";
            }
        ?>
    </body>
</html>
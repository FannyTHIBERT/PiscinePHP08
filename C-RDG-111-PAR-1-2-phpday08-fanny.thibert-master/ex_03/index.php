<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php  
            session_start();    
            if(htmlspecialchars($_GET["name"]))
            {  
                $_SESSION["name"] = htmlspecialchars($_GET["name"]);
                echo "Hello " . $_SESSION["name"];
                
            }elseif(!empty($_SESSION["name"])){
                echo "Hello " . $_SESSION["name"];
                $_SESSION['name'] = null;
            }else{
                echo "Hello platypus";
            }
        ?>
    </body>
</html>
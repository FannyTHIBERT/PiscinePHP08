<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php if(!$_POST["name"] || !$_POST["email"] || !$_POST["password"] || !$_POST["password_confirmation"]){
        ?>
            <form method="post">
            <p>name <input type="text" name="name"/></p>
            <p>email <input type="text" name="email"/></p>
            <p>password <input type="password" name="password"/></p>
            <p>password_confirmation <input type="password" name="password_confirmation"/></p>
            <p><input type="submit" value="Submit"></p>
            </form>
        <?php
            }
            elseif($_POST["name"] && $_POST["email"] && $_POST["password"] && $_POST["password_confirmation"])
            {
                if(strlen($_POST["name"]) < 3 || strlen($_POST["name"]) > 10)
                {
                    echo "Invalid name";
                }
                elseif(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
                {
                    echo "Invalid email";
                }
                elseif($_POST["password"] !== $_POST["password_confirmation"] || strlen($_POST["password"]) < 3 || strlen($_POST["password"]) > 10)
                {
                    echo "Invalid password or password confirmation";
                }
                else
                {
                $hash_pass = password_hash($_POST["password"], PASSWORD_DEFAULT);
                date_default_timezone_set('Europe/Paris');
                $date = date("m-d-y");
                $user = ["name"=>$_POST["name"], "email"=>$_POST["email"], "password"=>$hash_pass, "created_at"=>$date];
                $json = json_encode($user);
                $bytes = file_put_contents("user.json", $json);
                echo "User created.";
                }
            }
        ?>
    </body>
</html>
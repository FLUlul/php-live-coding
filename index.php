<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>live-coding</title>
</head>
<body>
    <form action="" method="get">
        <label for="">Email</label>
        <input type="text" name="email-user">
    </form>

    <p>
        <?php 
            $email = $_GET["email-user"];
            
            if (str_contains($email, "@") && str_contains($email, ".")) {
                echo "<div>OK</div>";
            }
            elseif ($email == '') {
                echo "<div>empty input</div>";
            }
            else {
                echo "<div>KO</div>";
            }
        ?>

    </p>
</body>
</html>
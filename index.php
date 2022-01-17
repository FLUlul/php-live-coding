<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>live-coding</title>

    <?php
        define("DB_SERVERNAME", "localhost");
        define("DB_USERNAME","root");
        define("DB_PASSWORD", "root");
        define("DB_NAME", "universitydb");
            
        $conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);
            
        if ($conn && $conn->connect_error) {
            
            echo "Connection failed: " . $conn->connect_error;
        }

        echo "db ok";
    ?>
</head>
<body>
    <h1>HELLO WORLD</h1>

    <?php
        $sql = "SELECT * FROM teachers";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {

            while($row = $result->fetch_assoc()) {
            
                echo $row['id'] . " - " 
                    . $row['name'] . ' ' 
                    . $row['surname'] . ' '
                    . $row['phone'] . '<br>';
            }
        } elseif ($result) {
            
            echo "0 results"; 
        } else {
            
            echo "query error";
        }

        $conn->close();
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Connection
    </title>
    <meta charset="utf-8"/>
</head>
<body>
    <?php
    require_once "settings.php";
    $conn = @mysqli_connect($host,$user,$pwd,$student_db);
    if($conn)
        {
            echo"<p>Connection Successful!</p>";
            mysqli_close($conn);
        }
        else
            echo"<p>Unable to connect to the db.</p>";
        ?>
</body>

</html>
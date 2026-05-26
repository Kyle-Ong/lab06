<!DOCTYPE html>
<html lang="en">

<head>
    <title>
        Record
    </title>
    <meta charset="utf-8"/>
</head>
<body>
<?php
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
?>
</body>
</html>
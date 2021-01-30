<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $data = file_get_contents("var1.txt");
    print_r($data);
    $records = explode("<--->", $data);
    print_r($records);
    echo "<table border='1px' width='500px'>";
    echo "<th>ИМЯ</th><th>Email</th><th>Текст</th>";
    foreach ($records as  $value) {

        $row = explode("\n", trim($value));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";

    ?>
    <form action="?" method="post">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="text">
        <input type="submit" value="ok">

    </form>

</body>

</html>
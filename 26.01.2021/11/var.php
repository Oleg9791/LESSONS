<?php
include "add.php";
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
    $data = file_get_contents("var.txt");
    print_r($data);
    $records = explode("<----->", $data);
    // print_r($records);
    echo "<table border='1'width='520px'>";
    echo "<th>Имя</th><th>Почта</th><th>Текст</th><th>Дата/Время</th>";

    foreach ($records as $record) {
        // trim($record);
        $row = explode("\n", trim($record));
        // print_r($row);
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td><td>$row[3]</td></tr>";
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
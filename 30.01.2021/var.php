<?php

if ((!empty($_POST)) and ($_POST["name"] != "") && ($_POST["text"] != "")) {
    $row = "\n<---->\n" .
        $_POST["name"] . "\n" .
        $_POST["email"] . "\n" .
        $_POST["text"];

    file_put_contents("var.txt", $row, FILE_APPEND);
    header("Location: var.php");
    die();
}
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
    $records = explode("<---->", $data);
    print_r($records);
    echo "<table border='1' width='500px'>";
    echo "<th>ИМЯ</th><th>Email</th><th>ТЕКСТ</th>";

    foreach ($records as  $record) {
        $row = explode("\n", trim($record));
        echo "<tr><td>$row[0]</td><td>$row[1]</td><td>$row[2]</td></tr>";
    }
    echo "</table>";
    ?>
    <form action="?" method="post">

        <input type="text" name="name">
        <input type="text" name="email">
        <input type="text" name="text">
        <input type="submit" name="submit" value="ok">
    </form>
</body>

</html>
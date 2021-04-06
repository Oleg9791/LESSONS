<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "config.php";

    $data = file($fileName);
    // print_r($data);
    if (isset($_POST['answer'])) {
        $currentAnswer = $_POST['answer'];
        $buff = explode($separate, $data[$currentAnswer + 1]);
        $buff[1] += 1;
        $buff[1] .= "\n";
        $data[$currentAnswer + 1] = $buff[0] . $separate . $buff[1];
        file_put_contents($fileName, implode("", $data));
    }
    $quest = $data[0];
    unset($data[0]);


    $answers = [];
    foreach ($data as $value) {
        $answers[] = explode(" - ", $value);
    }
    // print_r($answers);

    ?>

    <form action="?" method="post">
        <?= $quest ?>
        <br>
        <?php
        foreach ($answers as $key =>  $value) {
            $count = $value[1] * 1;
            // echo     "<input type='radio' name='answer' value='$key'>$value[0]($calc)<br>\n";
            echo " <input type='radio' value='$key' name='answer'>$value[0] <div  style='height:5px; background-color: brown; width: $count%' >($count)</div><br>";
        }
        ?>
        <input type="submit" value="ok">

    </form>

</body>

</html>
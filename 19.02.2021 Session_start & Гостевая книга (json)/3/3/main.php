<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            <?php
            include "smile.php";

            $data = json_decode(file_get_contents("data.json"), true);
            echo "<table border='1' class='table table-bordered border-primary'>";
            foreach ($data as $row) {
                if (!cenzura($row["msg"])) {

                    $row1 = preg_replace("/\b\d{2}+\-\d{2}+\-\d{2}+\b/ius", " ", $row["time"]);
                    $fun = smile($row["msg"]);
                    echo "<tr><td>$fun</td><td>$row[name]</td><td>$row1</td></tr>";
                }

            }
            echo "</table>";
            ?>

        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-sm">
            One of three columns
        </div>
        <div class="col-sm">
            <form action="add.php" method="post">
                <textarea name="msg" class="form-control" cols="30" rows="10"></textarea><br>
                <input type="text" name="name">
                <input type="submit" class="btn btn-primary" value="ok">
            </form>
        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>

</body>
</html>

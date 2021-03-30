<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">

        </div>
        <div class="col-sm">
            <?php

            include_once "connect.php";
            //echo $_GET["id"];
            $sql = "SELECT * FROM `vedomost` WHERE id = $_GET[id]";
            $result = mysqli_query($link, $sql);
            $row = mysqli_fetch_assoc($result);

            ?>
            <form action="edit.php" method="post">
                <input type="text" class="form-control" name="name" value="<?= $row['name'] ?>"><br>
                <input type="text" class="form-control" name="zp" value="<?= $row['zp'] ?>"><br>
                <input type="hidden" name="id" value="<?= $row['id'] ?>">
                <input type="submit" class="btn btn-warning" value="Сохранить">
            </form>

        </div>
        <div class="col-sm">

        </div>
    </div>
</div>
</body>
</html>


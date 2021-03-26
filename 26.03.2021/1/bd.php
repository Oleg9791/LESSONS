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
            One of three columns
        </div>
        <div class="col-sm">
            <?php
            $link = mysqli_connect('localhost', 'root', 'root', 'guestbookk');

            $sql = "SELECT * FROM `gb`";
            $result = mysqli_query($link, $sql);
            echo "<table class='table table-success table-striped'><th>Message</th><th>Name</th>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>$row[message]</td> <td>$row[name]</td></tr><br>";
            }
            echo "</table><br>";

            mysqli_free_result($result);
            mysqli_close($link);
            ?>

            <form action="add.php" method="post">
                <input type="text" name="name"><br><br>
                <textarea name="message" id="" cols="30" rows="3"></textarea><br>
                <input type="submit" class="btn btn-danger" value="ok">

            </form>

        </div>
        <div class="col-sm">
            One of three columns
        </div>
    </div>
</div>

</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"-->
<!--          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm">
        </div>
        <div class="col-sm">
            <?php


            class Map extends TicTac
            {
                /**
                 * @param array $map
                 * @return Map
                 */
                public function setMap(array $map): static
                {
                    $this->map = $map;
                    return $this;
                }

                public function getHtmlTable(): string
                {
                    $table = "";

                    for ($i = 0; $i < count($this->map); $i++) {
                        $table .= "<table border='1'>";

                        for ($j = 0; $j < count($this->map); $j++) {
                            if ($this->map[$i][$j] == "X") {
                                $table .= "<td style='width: 30px;height: 30px'>X</td>";

                            } elseif ($this->map[$i][$j] == "0") {
                                $table .= "<td style='width: 30px;height: 30px'>0</td>";

                            }

                            if ($this->map[$i][$j] == "") {
                                $table .= "<td style='width: 30px;height: 30px'></td>";
                            }
                        }
                    }
                    $table .= "</table>";

                    return $table;
                }

            }

            ?>

        </div>
        <div class="col-sm">
        </div>
    </div>
</div>
</body>
</html>

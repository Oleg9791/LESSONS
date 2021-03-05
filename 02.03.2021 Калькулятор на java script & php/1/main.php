 <?php include "calc.php"?>
 <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!--    <script src="calc.js"></script>-->
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="row top">
        <div class="col-3">
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action">A simple default list group item</a>

                <a href="#" class="list-group-item list-group-item-action list-group-item-primary">A simple primary list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">A simple secondary
                    list group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-success">A simple success list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-danger">A simple danger list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-warning">A simple warning list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group
                    item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group
                    item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-info">A simple info list group
                    item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">A simple light list
                    group item</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-dark">A simple dark list group
                    item</a>

            </div>
        </div>
        <div class="col-6">
            <form action="?" method="post">
                <input type="text" class="txt" name="calc" value="<?= $result; ?>"
                       id="text"
                       readonly="readonly">
                <input type="submit" class="rav" value="рассчитать" name="res">
            </form>


            <table class="tab">
                <tr>
                    <td>
                        <button class=" but" onclick="insert(0)">0</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(1)">1</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(2)">2</button>
                    </td>
                    <td>
                        <button class=" but" onclick="f()">С</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert(3)">3</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(4)">4</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(5)">5</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(6)">6</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert(7)">7</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(8)">8</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert(9)">9</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('+')">+</button>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class=" but" onclick="insert('-')">-</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('*')">*</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('/')">/</button>
                    </td>
                    <td>
                        <button class=" but" onclick="insert('**')">**</button>
                    </td>

                </tr>

            </table>
        </div>
        <div class="col-3">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card" style="width: 18rem;">
                            <img src="https://www.abm.com.pl/data/shoplang/f_97080cd8153b3bfe1400fbe184ccc814.jpeg"
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="https://artery.by/upload/iblock/f1a/f1ae248fdfe4d82fb7b99ade1af29e1e.jpg"
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card" style="width: 18rem;">
                            <img src="https://i.simpalsmedia.com/marketplace/products/original/ffc33786423dfc8923eba8beb905b79c.jpg"
                                 class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up
                                    the bulk of the card's
                                    content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>
<footer class="footer">
    <p class="text-center"><span class="fw-bolder__dot">Онлайн-калькуляторы</span><br> © 2021 Calculator.by Все права
        защищены</p>
</footer>
<script>
    function f() {
        document.getElementById("text").value = ""
        // alert('Привет')
    }

    function insert(value) {
        document.getElementById("text").value += value

    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
        crossorigin="anonymous"></script>
</body>
</html>


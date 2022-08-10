<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>首頁</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">

        <nav
            class="navbar navbar-expand-lg navbar-light bg-primary text-white shadow-lg p-3 mb-5 bg-body rounded mt-4 ">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-mug-hot"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="?do=main">MAIN PAGE</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="?do=aboutme">ABOUT ME</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="?do=portfolio">PORTFOLIO</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="?do=contact">CONTACT ME</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="organ-labels_btm-border" style="width:auto"></div>
            </div>
        </nav>
    </div>

    <div class="container">
        <?php
        $do=$_GET['do']??'main';
        $file=$do.".php";
        if(file_exists($file)){
            include "$file";
        }else{
            include "main.php";
        }
    ?>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>




</body>

</html>
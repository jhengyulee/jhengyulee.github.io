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

    <style>
    .ml9 {
        position: relative;
        font-weight: 200;
        font-size: 4em;
    }

    .ml9 .text-wrapper {
        position: relative;
        display: inline-block;
        padding-top: 0.2em;
        padding-right: 0.05em;
        padding-bottom: 0.1em;
        overflow: hidden;
    }

    .ml9 .letter {
        transform-origin: 50% 100%;
        display: inline-block;
        line-height: 1em;
    }

    #skill div h3 {
        text-align: center;
    }

    #skill div img {
        margin: 5px;
    }

    #main{
        margin-left: 450px;
    }
    </style>

</head>

<body>
    <div class="container">

        <nav
            class="navbar navbar-expand-lg navbar-light bg-primary text-white shadow-lg p-3 mb-5 bg-body rounded mt-4 navbar-fixed-top">
            <a class="navbar-brand" href="#"><i class="fa-solid fa-mug-hot"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="#main">MAIN PAGE</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="#aboutme">ABOUT ME</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="#portfolio">PORTFOLIO</a>
                    </li>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <li class="nav-item active font-weight-bold">
                        <a class="nav-link" href="#contact">CONTACT ME</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
                <div class="organ-labels_btm-border" style="width:auto"></div>
            </div>
        </nav>
    </div>


    <!-- main page -->
    <div class="container" id="main">
        <div class="row" style="height:80vh;justify-content:center">

            <h1 class="ml9" style="margin-top:200px;width:48%">
                <span class="text-wrapper">
                    <span class="letters">Warm welcome! &nbsp; I am James.</span>
                </span>
            </h1>


            <div style="width:48%; padding-left:10vh;margin-top:10vh" class="me">
                <img class="shadow-lg" src="./img/me02.png"
                    style="border-radius:50%;margin:5px auto;width:400px;height:400px">
            </div>


        </div>
    </div>



    <!-- about me  -->
    <div class="container" id="aboutme">

        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title" style="margin:50px 0">
                    <h2>Experiences</h2>
                    
                </div>
                <!-- 1 -->
                <div class="row justify-content-around col-12">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <img src="./img/learning.jpg" class="img-fluid rounded-lg shadow">
                    </div>
                    <div class="col-lg-4">
                        <h4>2022年<br>
                            泰山職訓網頁設計專班
                        </h4>
                        <br><br>
                        歷經半年的腦力風暴，逐漸著迷於這個由程式碼、圖文設計及邏輯組成的世界。

                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <br>
                <hr>
                <br>

                <!-- 2 -->
                <div class="row justify-content-around col-12">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">

                        <h4>
                            2018年 - 2022年<br>
                            新北市立福和國中
                        </h4>
                        <br><br>
                        任教期間擔任營隊工作人員看到學生令人驚豔的網頁作品
                        ，激起自身對網頁設計的好奇及探究心。


                    </div>
                    <div class="col-lg-4">
                        <img src="./img/fuhe.jpg" class="img-fluid rounded-lg shadow">
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <br>
                <hr>
                <br>

                <!-- 3 -->
                <div class="row justify-content-around col-12">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <img src="./img/taipei.JPG" class="img-fluid rounded-lg shadow">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <h4>
                            2016年 - 2017年<br>
                            台北市就業服務處
                        </h4>
                        <br><br>

                        擔任就業服務輔導員時期，專責就業輔導活動企畫撰寫與執行
                        ，台北市銀髮服務計畫起草人之一。



                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <br>
                <hr>
                <br>

                <!-- 4 -->
                <div class="row justify-content-around col-12">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-4">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem suscipit
                            iste harum modi accusamus praesentium dolore ipsam magni laboriosam laudantium in dolores
                            expedita, aperiam ducimus culpa provident nisi veritatis!
                            Fuga consectetur magnam totam quas quos! Voluptatem iure repellat eligendi molestiae!
                            Officia aliquam enim accusamus odit!
                        </p>
                    </div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-4">
                        <img src="./img/sea.jpg.jpg" class="img-fluid rounded-lg shadow">
                    </div>
                    <div class="col-lg-1"></div>
                </div>
                <br><br><br><br><br><br><br><br>
                <!-- 5 -->
                <div class="section-title" style="margin:50px 0">

                    <h2>Skills</h2>

                </div>
                <div class="row justify-content-around col-12" id="skill">

                    <div class="col-lg-3 shadow-lg rounded">
                        <h3>Graphic Design</h3>
                        <img src="./skills/ps.png" style="width:100px;height:100px">
                        <img src="./skills/Illu.png" style="width:100px;height:100px">
                    </div>
                    <div class="col-lg-1"></div>

                    <div class="col-lg-3 shadow-lg rounded">
                        <h3>Front-End</h3>
                        <img src="./skills/js.png" style="width:100px;height:100px">
                        <img src="./skills/html.png" style="width:100px;height:100px">
                        <img src="./skills/css.png" style="width:100px;height:100px">
                        <img src="./skills/bs.png" style="width:100px;height:100px">
                    </div>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 shadow-lg rounded">
                        <h3>Back-End</h3>
                        <img src="./skills/php.png" style="width:100px;height:100px">
                        <img src="./skills/sql.png" style="width:100px;height:100px">
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- portfolio -->

    <div class="section-title" style="margin:50px 0;">

        <h2>PORTFOLIO</h2>

    </div>

    <div class="container" id="portfolio">



        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container mt-4">

                    <div class="row justify-content-between">
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/bird.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">30-days animals challenge</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    利用黃金比例幾何圖形，描繪出動物外型輪廓，以漸層方式將其上色
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>
                        </div>
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/calendar.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">兔年大吉電子年曆</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    以紅為基色，結合拓印白色兔子輪廓，期望新的一年能犀利開始
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>
                        </div>
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/poster.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">旅遊電子報</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    陽光、沙灘、海洋，三種元素編織後疫情時代旅遊的想像
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>

                        </div>

                    </div>
                </div>

                <div class="container mt-4">
                    <div class="row justify-content-between">
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/banner.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">網頁橫幅設計</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    初來乍到的第一份作品。用幾何圖形拼湊，呈現職業訓練簡單有力、實事求是的風格
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>
                        </div>
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/clock.jpg" class="card-img-top" style="height:180px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">電子時鐘</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    利用javascript語法寫成的小小作品，當個螢幕保護程式騙騙人還不錯
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>
                        </div>
                        <div class="card shadow" style="width:18rem;">
                            <img src="./img/calendarphp.jpg" class="card-img-top" style="height:180px">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">線上萬年曆</h5>
                                <p class="card-text">
                                    <!-- icon -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="4" height="4" fill="currentColor"
                                        class="bi bi-sun" viewBox="0 0 24 24">
                                        <path
                                            d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
                                    </svg>
                                    <!-- icon end -->
                                    <br>
                                    用PHP後端語言牛刀小試的作品，強力推薦作為新手學習PHP最佳入門<br>
                                </p>
                                <a href="#" class="btn btn-primary">點我看看</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!-- cotact -->
    <section id="contact" class="contact" id="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title" style="margin:50px 0">
                <h2>Contact</h2>
            </div>

            <div class="row mt-1">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">

                            <h4>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </h4>
                            <p>Taishan Dist. , New Taipei City , TW</p>
                        </div>

                        <div class="email">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                </svg></h4>
                            <p>hellomylove@gmail.com</p>
                        </div>

                        <div class="phone">

                            <h4><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-phone-vibrate" viewBox="0 0 16 16">
                                    <path
                                        d="M10 3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h4zM6 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H6z" />
                                    <path
                                        d="M8 12a1 1 0 1 0 0-2 1 1 0 0 0 0 2zM1.599 4.058a.5.5 0 0 1 .208.676A6.967 6.967 0 0 0 1 8c0 1.18.292 2.292.807 3.266a.5.5 0 0 1-.884.468A7.968 7.968 0 0 1 0 8c0-1.347.334-2.619.923-3.734a.5.5 0 0 1 .676-.208zm12.802 0a.5.5 0 0 1 .676.208A7.967 7.967 0 0 1 16 8a7.967 7.967 0 0 1-.923 3.734.5.5 0 0 1-.884-.468A6.967 6.967 0 0 0 15 8c0-1.18-.292-2.292-.807-3.266a.5.5 0 0 1 .208-.676zM3.057 5.534a.5.5 0 0 1 .284.648A4.986 4.986 0 0 0 3 8c0 .642.12 1.255.34 1.818a.5.5 0 1 1-.93.364A5.986 5.986 0 0 1 2 8c0-.769.145-1.505.41-2.182a.5.5 0 0 1 .647-.284zm9.886 0a.5.5 0 0 1 .648.284C13.855 6.495 14 7.231 14 8c0 .769-.145 1.505-.41 2.182a.5.5 0 0 1-.93-.364C12.88 9.255 13 8.642 13 8c0-.642-.12-1.255-.34-1.818a.5.5 0 0 1 .283-.648z" />
                                </svg></h4>
                            <p>+886-988-123-789</p>
                        </div>



                    </div>



                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>





    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <script>
    var textWrapper = document.querySelector('.ml9 .letters');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({
            loop: true
        })
        .add({
            targets: '.ml9 .letter',
            scale: [0, 1],
            duration: 1500,
            elasticity: 600,
            delay: (el, i) => 45 * (i + 1)
        }).add({
            targets: '.ml9',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    </script>



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
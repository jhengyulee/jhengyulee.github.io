<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>電子時鐘</title>
    <link rel="stylesheet" href="./css/digi.css">
</head>

<body>
    <div class="digiImg">
        <!-- 時 -->
        <div id="ck1" class="mg1"></div>
        <div id="ck2" class="mg2"></div>
        <!-- 冒號 -->
        <div class="mgd"></div>
        <!-- 分 -->
        <div id="ck3" class="mg3"></div>
        <div id="ck4" class="mg4"></div>
        <!-- 冒號 -->
        <div class="mgd"></div>
        <!-- 秒 -->
        <div id="ck5" class="mg5"></div>
        <div id="ck6" class="mg6"></div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    </script>

    <script>
    // $(document).ready(function () {

    function update() {



        // 1.抓目前時間
        const nt = new Date(); //日期
        const nh = nt.getHours(); //時
        const nm = nt.getMinutes(); //分
        const ns = nt.getSeconds(); //秒

        // 2.時間轉換 eg:目前時間16:23:50
        // 則 16 => 1 & 6
        //    23 => 2 & 3
        // 以此類推 
        const nk1 = Math.floor(nh / 10); //1
        const nk2 = nh % 10; //6
        const nk3 = Math.floor(nm / 10); //2
        const nk4 = nm % 10; //3
        const nk5 = Math.floor(ns / 10); //5
        const nk6 = ns % 10; //0

        //原生js  依照數字去抓需要的數字圖
        document.getElementById('ck1').className = `mg${nk1}`;
        document.getElementById('ck2').className = `mg${nk2}`;
        document.getElementById('ck3').className = `mg${nk3}`;
        document.getElementById('ck4').className = `mg${nk4}`;
        document.getElementById('ck5').className = `mg${nk5}`;
        document.getElementById('ck6').className = `mg${nk6}`;
        // 以下為錯誤寫法:class被指定後改變了  所以第二次跑就抓不到新的classname  
        // document.getElementsByClassName('mg1').className = `mg${nk1}`;
        // document.getElementsByClassName('mg2').className = `mg${nk2}`;
        // document.getElementsByClassName('mg3').className = `mg${nk3}`;
        // document.getElementsByClassName('mg4').className = `mg${nk4}`;
        // document.getElementsByClassName('mg5').className = `mg${nk5}`;
        // document.getElementsByClassName('mg6').className = `mg${nk6}`;

        //冒號閃爍
        document.getElementsByClassName('mgd')[0].style.opacity = 1; //1為透明度100% 不透明
        document.getElementsByClassName('mgd')[1].style.opacity = 1; //0為透明度0% 透明

        setTimeout(function() {
            document.getElementsByClassName('mgd')[0].style.opacity = 0; //1為透明度100% 不透明
            document.getElementsByClassName('mgd')[1].style.opacity = 0; //0為透明度0% 透明
        }, 500); //0.5秒

    }

    update(); //外部執行
    setInterval(update, 1000);
    // });
    </script>
</body>

</html>
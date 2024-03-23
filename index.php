<?php
    include_once "Model/connect.php";
    include_once "Model/hanghoa.php";
    // include_once"Model/user.php";

    // Cách 2
    session_start();
    set_include_path(get_include_path().PATH_SEPARATOR.'Model/');
    spl_autoload_extensions('.php');
    spl_autoload_register();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <!-- duong link icon cua boostrap4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!--duong link logo facbook  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
       integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- link đăng nhập -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- end link đăng nhập -->
    <link rel="stylesheet" type="text/css" href="Content/CSS/Tour.css" />
    <!--  -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Snowfall library -->
    <script src="https://rawgit.com/loktar00/JQuery-Snowfall/master/src/snowfall.jquery.js"></script>

    <title>SanPham</title>

    <!--  -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include Snowfall library -->
    <script src="https://rawgit.com/loktar00/JQuery-Snowfall/master/src/snowfall.jquery.js"></script>
    <!--  -->
    <!--  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">







    <!-- Hiệu ứng tuyết rơi -->
    <style>
    #snowflakeContainer {
        position: absolute;
        left: 0px;
        top: 0px;
    }

    .snowflake {
        padding-left: 15px;
        font-size: 14px;
        line-height: 24px;
        position: fixed;
        color: #ebebeb;
        user-select: none;
        z-index: 1000;
        -moz-user-select: none;
        -ms-user-select: none;
        -khtml-user-select: none;
        -webkit-user-select: none;
        -webkit-touch-callout: none;
    }

    .snowflake:hover {
        cursor: default
    }
    </style>
    <div id='snowflakeContainer'>
        <p class='snowflake'>❅</p>

    </div>
    <script>
    var requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window
        .webkitRequestAnimationFrame || window.msRequestAnimationFrame;
    var transforms = ["transform", "msTransform", "webkitTransform", "mozTransform", "oTransform"];
    var transformProperty = getSupportedPropertyName(transforms);
    var snowflakes = [];
    var browserWidth;
    var browserHeight;
    var numberOfSnowflakes = 30;
    var resetPosition = false;

    function setup() {
        window.addEventListener("DOMContentLoaded", generateSnowflakes, false);
        window.addEventListener("resize", setResetFlag, false)
    }
    setup();

    function getSupportedPropertyName(b) {
        for (var a = 0; a < b.length; a++) {
            if (typeof document.body.style[b[a]] != "undefined") {
                return b[a]
            }
        }
        return null
    }

    function Snowflake(b, a, d, e, c) {
        this.element = b;
        this.radius = a;
        this.speed = d;
        this.xPos = e;
        this.yPos = c;
        this.counter = 0;
        this.sign = Math.random() < 0.5 ? 1 : -1;
        this.element.style.opacity = 0.5 + Math.random();
        this.element.style.fontSize = 4 + Math.random() * 30 + "px"
    }
    Snowflake.prototype.update = function() {
        this.counter += this.speed / 5000;
        this.xPos += this.sign * this.speed * Math.cos(this.counter) / 40;
        this.yPos += Math.sin(this.counter) / 40 + this.speed / 30;
        setTranslate3DTransform(this.element, Math.round(this.xPos), Math.round(this.yPos));
        if (this.yPos > browserHeight) {
            this.yPos = -50
        }
    };

    function setTranslate3DTransform(a, c, b) {
        var d = "translate3d(" + c + "px, " + b + "px, 0)";
        a.style[transformProperty] = d
    }

    function generateSnowflakes() {
        var b = document.querySelector(".snowflake");
        var h = b.parentNode;
        browserWidth = document.documentElement.clientWidth;
        browserHeight = document.documentElement.clientHeight;
        for (var d = 0; d < numberOfSnowflakes; d++) {
            var j = b.cloneNode(true);
            h.appendChild(j);
            var e = getPosition(50, browserWidth);
            var a = getPosition(50, browserHeight);
            var c = 5 + Math.random() * 40;
            var g = 4 + Math.random() * 10;
            var f = new Snowflake(j, g, c, e, a);
            snowflakes.push(f)
        }
        h.removeChild(b);
        moveSnowflakes()
    }

    function moveSnowflakes() {
        for (var b = 0; b < snowflakes.length; b++) {
            var a = snowflakes[b];
            a.update()
        }
        if (resetPosition) {
            browserWidth = document.documentElement.clientWidth;
            browserHeight = document.documentElement.clientHeight;
            for (var b = 0; b < snowflakes.length; b++) {
                var a = snowflakes[b];
                a.xPos = getPosition(50, browserWidth);
                a.yPos = getPosition(50, browserHeight)
            }
            resetPosition = false
        }
        requestAnimationFrame(moveSnowflakes)
    }

    function getPosition(b, a) {
        return Math.round(-1 * b + Math.random() * (a + 2 * b))
    }

    function setResetFlag(a) {
        resetPosition = true
    };
    //]]>
    </script>
    <!--  -->


</head>

<body>
    <?php 
        include_once "View/headder.php"

    ?>
    <!-- header -->
    <!-- hiên thi noi dung -->
    <div>
        <div class="row">
            <!-- hien thi noi dung đây -->
            <?php
                // khởi tạo trang nào trang chủ
                $ctrl="home";
                // index gọi controller khác nhau
                if (isset($_GET['action']))
                {
                    $ctrl=$_GET['action'];// sản phẩm   
                }
                include_once"Controller/$ctrl.php";

                
             ?>
        </div>
    </div>
    <!-- hiên thị footer -->
    <?php 
        include_once "View/footer.php"
    ?>

    <!-- Ảnh Quảng Cáo 2 bên góc -->
    <!-- <div style="top: 210px; position: fixed; right: 50%; margin-right: 600px; bottom: 0px;">
        <a rel="nofollow" href="#" title="m88" target="_blank">
            <a rel="nofollow" target="_blank">
                <img src="Content/imagetourdien/quangcao1.gif" width="100%">
            </a>
        </a>
    </div>
    <div style="top: 210px; position: fixed; left: 50%; margin-left: 600px; bottom: 0px;">
        <a rel="nofollow" target="_blank">
            <img src="Content/imagetourdien/quangcao2.gif" width="100%">
        </a>
        <br>
    </div> -->
    <!--  -->
    <!-- Nút Back To Top -->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
        <img src="Content/imagetourdien/up-arrow.png" alt="Go to top" class="icon">
    </button>

    <style>
    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 20px;
        cursor: pointer;
        background: none;
        border: none;
    }

    #myBtn img {
        width: 60px;
        /* Adjust the width of the image */
        height: 60px;
        /* Adjust the height of the image */
    }

    #myBtn:hover img {
        filter: brightness(1.2);
    }
    </style>
    <!--  -->
    <script>
    let mybutton = document.getElementById("myBtn");
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
    </script>
    <!--  -->
</body>

</html>
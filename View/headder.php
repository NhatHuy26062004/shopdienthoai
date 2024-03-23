<header class="row no-gutters">
    <!-- nav san pham -->
    <section class="col-12" style="height:40px;">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top scrolling-navbar"
                    style="margin-bottom: 0px;">

                    <div class="collapse navbar-collapse" id="basicExampleNav">

                        <!-- Links -->
                        <ul class="navbar-nav mr-auto smooth-scroll">

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </section>

    <style>
    .navbar {
        margin-bottom: 0px;
        background-color: #101010;
    }

    .nav-item {
        padding: 0px 10px 0px 10px;
    }
    </style>
    <!-- dang ky -->
    <section class="col-12">
        <div class="col-12">
            <div class="row">
                <nav class="navbar navbar-expand-lg n">

                    <!-- Left (Logo) -->
                    <div class="navbar-brand mb-3">
                        <a href="index.php">
                            <img src="Content/imagetourdien/logo-full.png" width="300px" height="40px" alt="Logo">
                            <img src="Content/imagetourdien/logo-full2.png" alt="" style="width: 15%;">
                        </a>
                    </div>

                    <!-- Right -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Search Form -->
                        <li class="nav-item">
                            <!-- <div class="input-group">
                                    <button name="txtsearch" class="btn btn-outline-secondary" type="button"
                                        id="searchButton">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <input class="form-control" type="text" name="txtsearch" placeholder="Tìm Kiếm">
                                    <div class="input-group-append">
                                        <button name="txtsearch" class="btn btn-outline-secondary" type="submit"
                                            id="btsearch">
                                            Tìm Kiếm
                                        </button>
                                    </div>
                                </div> -->
                            <form class="form-inline" action="index.php?action=sanpham&act=timkiem" method="post">
                                <input class="form-control me-2" type="search" name="txtsearch" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                        </li>

                        <!-- Navigation Links -->
                        <li class="nav-item">
                            <a href="index.php?action=dangky" class="nav-link" style="color: white;">Đăng Ký</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=dangnhap" class="nav-link" style="color: white;">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=dangnhap&&act=dangxuat" class="nav-link"
                                style="color: white;">Đăng Xuất</a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?action=giohang" class="nav-link"><img
                                    src="Content/imagetourdien/cart.png" width="30px" height="30px" alt=""></a>
                        </li>
                        <li class="nav-item">
                            <?php if (isset($_SESSION['makh'])): ?>
                            <p style="color: red; margin-top: 10px; margin-left: 0px;"><?php echo $_SESSION['tenkh']; ?>
                            </p>
                            <?php else: ?>
                            <p style="color: red; margin-top: 13px; margin-left: 0px;">Xin chào !</p>
                            <?php endif; ?>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>




</header>
<!-- dang ky -->
<!--  -->
<style>
/* Thêm định dạng cho nút tròn */
</style>

<div class="row">

    <div class="col-12">
        <div class="row">
            <div class="col-12">

                <!-- Carousel -->
                <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="3000">

                    <!-- Các điểm chuyển đổi -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <!-- Thêm các điểm chuyển đổi tương ứng với số lượng ảnh -->
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                    </ol>

                    <!-- Hình ảnh carousel -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="Content/imagetourdien/carousel/10.png" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="Content/imagetourdien/carousel/11.png" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="Content/imagetourdien/carousel/12.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="Content/imagetourdien/carousel/13.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="Content/imagetourdien/carousel/14.png" class="d-block w-100" alt="Slide 3">
                        </div>
                        <div class="carousel-item">
                            <img src="Content/imagetourdien/carousel/15.png" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>

                    <!-- Nút chuyển đổi trước và sau -->
                    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>

                </div>
            </div>
        </div>

    </div>
</div>
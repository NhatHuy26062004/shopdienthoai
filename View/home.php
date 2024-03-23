<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha384-cp3Y65BnIqHICOD0edwBOPqleY47ENK/Z5fRTt8+p1JKK0ELI82L4RJjMFFbf4z1" crossorigin="anonymous">
<section style=" background-image: url('Content/imagetourdien/bg.png');
            background-color: #3e3e3f ;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100%;">

    <div class="container">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
            integrity="sha512-7zUnzjY9JicOX8OcjSNX/gP2A+WU6JFnRrg7Jg8fPDJ9gD/epInGw/Okdbd+fi3FCl4JX4w2F17t1/MvXubPQQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!--Section: Examples-->
        <!--  -->
        <section id="examples" class="text-center">
            <style>
            .logo-sanpham {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                margin-top: 40px;
            }

            .column {
                flex: 0 1 calc(16.666% - 20px);
                margin: 10px;
                position: relative;
                overflow: hidden;
                border-radius: 12px;
                transition: box-shadow 0.3s;
                height: 220px;
                background-color: #323232;
            }

            .column img {
                width: 100%;
                height: auto;
                object-fit: cover;
            }

            .sanpham-overlay {
                background-color: #323232;
                text-align: center;
                padding: 10px;
            }

            .sanpham-overlay p {
                color: #ffffff;
                margin: 0;
            }

            .column:hover {
                box-shadow: 0 0 20px rgba(255, 255, 255, 0.20);
            }

            .column:hover img {
                border-color: #ffffff;
            }

            .column:hover .sanpham-overlay {
                opacity: 1;
            }
            </style>

            <div class="logo-sanpham mb-5">
                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/2.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=1" class=""
                            style="text-decoration: none;color: #ffffff;">iPhone</a>

                    </div>
                </div>

                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/3.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=2" class=""
                            style="text-decoration: none;color: #ffffff;">Mac</a>
                    </div>
                </div>

                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/4.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=3" class=""
                            style="text-decoration: none;color: #ffffff;">iPad</a>
                    </div>
                </div>

                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/5.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=4" class=""
                            style="text-decoration: none;color: #ffffff;"> Watch</a>
                    </div>
                </div>

                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/6.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=5" class=""
                            style="text-decoration: none;color: #ffffff;"> Tai nghe</a>
                    </div>
                </div>

                <div class="column">
                    <div class="sanpham-overlay">
                        <img src="Content/imagetourdien/logo-sanpham/7.png">
                        <a href="index.php?action=sanpham&act=sanphamloai&maloai=6" class=""
                            style="text-decoration: none;color: #ffffff;"> Phụ kiện </a>
                    </div>
                </div>
            </div>
            <!-- Heading -->
            <div class="mb-5">
                <a href="index.php?action=sanpham" style="text-decoration: none; color: #ffffff;">
                    <i class="fab fa-apple" style="font-size: 40px; color: #ffffff;"></i>
                    <span class="topzone-cateiphone christmas" style="font-size: 40px;">Apple</span>
                </a>
            </div>
            <!--  -->
            <!--Grid row-->
            <style>

            </style>
            <div class="row " style="padding: 15px;">
                <?php 
                        $hh = new hanghoa();
                        $result = $hh->getHangHoaNew();
                        while ($set = $result->fetch()):
                    ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-center">
                    <div class="custom-container">
                        <div class="view overlay z-depth-1-half">
                            <img src="Content/imagetourdien/apple.png" style="width: 79px; height: 28px;float:left">
                            <img src="Content/imagetourdien/product/<?php echo $set['hinh'];?>"
                                class="img-fluid mx-auto d-block mb-3" alt="" style="width: 70%;">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>">
                            <span
                                style="color: black;font-weight: bold;font-size: 15px;"><?php echo $set['tenhh']." - ".$set['mausac'];?></span></br>
                        </a>
                        <h5 class="my-4 font-weight-bold" style="color: red;">
                            <?php echo number_format($set['dongia']);?>
                            <sup><u>đ</u></sup></br>
                        </h5>
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>"
                            style="display: flex; justify-content: center; align-items: center;">
                            <button class="btn btn-danger">Xem Chi Tiết</button>
                        </a>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <!--Grid row-->
        </section>
        <!-- end sản phẩm mới nhất -->
        <!-- sản phẩm khuyến mãi -->
        <section id="examples" class="text-center">
            <!-- Heading -->
            <div class="mb-5 mt-5">
                <a href="index.php?action=sanpham&act=sanphamkhuyenmai" style="text-decoration: none;color: #ffffff;">
                    <i class="fab fa-apple" style="font-size: 40px; color: #ffffff;"></i>
                    <span class="topzone-cateiphone christmas" style="font-size: 40px;">Apple Sale</span>
                </a>
            </div>
            <!--Grid row-->
            <style>
            .custom-container {
                border: 1px solid #ccc;
                border-radius: 10px;
                padding: 15px;
                margin-bottom: 20px;
                background-color: aliceblue;
                transition: all 0.3s ease;
            }

            .custom-container:hover {
                transform: scale(1.05);
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            }

            .custom-background1 {
                background-color: #ff685f;
                border-radius: 10px;
            }

            .custom-background1 img {
                width: 100%;
            }
            </style>
            <div class="row" style="padding: 15px;">
                <?php 
                        $kq=$hh->getHangHoaSale();
                        while($set=$kq->fetch()){
                    ?>
                <!--Grid column-->
                <div class="col-lg-3 col-md-4 mb-3 text-left">
                    <div class="custom-container">
                        <div class="view overlay z-depth-1-half">
                            <img src="Content/imagetourdien/apple.png" style="width: 79px; height: 28px;float:left">
                            <img src="Content/imagetourdien/product/<?php echo $set['hinh'];?>"
                                class="img-fluid mx-auto d-block" alt="" style="border-radius: 10px;width: 70%;">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <h5 class="my-4 font-weight-bold" style="text-align: center;">
                            <span
                                style="color: red;"><?php echo number_format($set['giamgia']);?><sup><u>đ</u></sup></span>
                            <strike><?php echo number_format($set['dongia']);?></strike><sup><u>đ</u></sup>
                        </h5>
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>"
                            style="display: flex; justify-content: center; align-items: center;">
                            <button class="btn btn-danger">Xem Chi Tiết</button>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
            <!--Grid row-->
        </section>
        <!-- end sản phẩm khuyến mãi -->
    </div>
</section>
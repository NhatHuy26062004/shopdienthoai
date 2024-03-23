<section style=" background-image: url('Content/imagetourdien/BG.png');
            background-color: #3e3e3f ;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100%;">
    <style>
    .items {
        border: 1px solid #c89979;
        border-radius: 15px;
        position: relative;
        transition: box-shadow 0.5s ease;
    }

    .items:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transform: scale(1.02);

    }

    .card-body {
        padding: 0;
    }

    .card-footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-end;
    }

    button.add {
        width: max-content;
        padding: 5px 10px 5px 10px;
        height: 30px;
        font-size: 15px;
        border: none;
        background-color: #c89979;
        border-radius: 5px;
        color: #fff;
        display: block;
        margin: 0 auto;
        text-align: center;
        bottom: 15px;
        transition: .3s;
    }

    button.add:hover {
        font-size: 17px;
    }

    .img-fluid {
        border-radius: 15px 15px 0 0;
    }

    span {
        color: #c89979;
    }

    .search-results {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
    }

    .pagination {
        margin-left: 200px;
    }
    </style>

    <?php
$hh = new hanghoa();
$count = $hh->getHangHoaAll()->rowCount();
$limit = 8;
$trang = new page();
$pages = $trang->findPage($count, $limit);
$start = $trang->findStart($limit);
?>
    <!-- sản phẩm-->
    <?php
$ac = 1;
if (isset($_GET['action'])) {
    if (isset($_GET['act']) && $_GET['act'] == 'sanphamkhuyenmai') {
        $ac = 2;
    } else if (isset($_GET['act']) && $_GET['act'] == 'timkiem') {
        $ac = 3;
    } else {
        $ac = 1;
    }
}
?>
    <!--Section: Examples-->
    <section id="examples" class="text-center">
        <!-- Heading -->
        <!--  -->
        <style>
        .logo-cate.cate-christmas {
            position: relative;
            width: 380px;
            height: 95px;
            margin: 0px 70px;
        }

        .logo-cate.cate-christmas i {
            position: absolute;
            top: 50%;
            left: 15%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
            font-weight: bold;
        }

        .logo-cate.cate-christmas .topzone-cateiphone {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 30px;
            font-weight: bold;
            text-align: center;
        }

        .box-slide .logo-cate {
            display: flex;
            align-items: center;
        }
        </style>
        <!--Section: Examples-->
        <section id="examples" class="text-center">

            <!-- Heading -->
            <div class="row">
                <div class="col-lg-8 text-right">
                    <?php 
                if($ac==1)
                {
                    echo'
                    <div class="mb-4 mt-4"><a href="index.php?action=sanpham" class="logo-cate cate-christmas">
                    <span class="topzone-cateiphone christmas">Sản phẩm</span>
                    <img src="Content/imagetourdien/banner-logo/2.png"></a></div>';
                }if ($ac==2)
                {
                    echo'
                    <div class="mb-4 mt-4"><a href="index.php?action=sanpham" class="logo-cate cate-christmas">
                    <span class="topzone-cateiphone christmas">Apple Sale</span>
                    <img src="Content/imagetourdien/banner-logo/2.png"></a></div>';
                }
                if($ac==3){
                    echo'<h3 class="mt-5 mb-5 font-weight-bold" style="color: red;margin-right:30px;">TẤT CẢ SẢN PHẨM TÌM KIẾM  </h3>';
                }
                ?>
                </div>

            </div>
            <!--Grid row-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <!-- <h3 class="mb-5 font-weight-bold mt-5" style="color: red;">PRODUCT</h3> -->
                </div>
            </div>
            <!--Grid row-->
            <div class="row container mx-auto">
                <?php
        $showPagination = true;
        $hh = new hanghoa();
        if ($ac == 1) {
            $result = $hh->getHangHoaAllPage($start, $limit);
        }
        if ($ac == 2) {
            $result = $hh->getHangHoaAllSale();
            $showPagination = false;
        }
        if ($ac == 3) {
            if (isset($_POST['txtsearch'])) {
                $tk = $_POST['txtsearch'];
                $result = $hh->timkiemSP($tk);
            }
            $showPagination = false;
        }
        while ($set = $result->fetch()):
            ?>

                <!--Grid column-->
                <style>
                .custom-container {
                    border: 1px solid #ccc;
                    border-radius: 10px;
                    padding: 15px;
                    margin-bottom: 20px;
                    background-color: aliceblue;
                }

                .custom-background1 {
                    border-radius: 10px;
                }

                .custom-background1 img {
                    width: 100%;
                    transition: transform 0.3s ease;
                }

                .custom-background1 img:hover {
                    transform: scale(1.1);
                }
                </style>
                <div class="col-lg-3 col-md-4 mb-3 text-center">
                    <div class="custom-container">
                        <div class="view overlay z-depth-1-half custom-background1">
                            <img src="Content/imagetourdien/apple.png" style="width: 79px; height: 28px; float:left">
                            <img src="Content/imagetourdien/product/<?php echo $set['hinh']; ?>"
                                class="img-fluid mx-auto d-block" style="width: 70%;">
                            <div class="mask rgba-white-slight"></div>
                        </div>
                        <h5 class="my-4 font-weight-bold text-center">
                            <?php echo number_format($set['dongia']); ?>
                            <sup><u>đ</u></sup><br>
                        </h5>
                        <a href="">
                            <p style="color: black;font-weight: bold;font-size: 15px;"><?php echo $set['tenhh']; ?></p>
                        </a>
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>">
                            <button class="btn btn-danger">Xem Chi Tiết</button>
                        </a>

                    </div>
                </div>
                <?php
        endwhile;
        ?>
            </div>
            <!--Grid row-->
        </section>


        <!-- end sản phẩm mới nhất -->
        <style>
        .pagination {
            display: flex;
            justify-content: center;
            list-style: none;
            padding: 0;
        }

        .pagination li {
            display: inline-block;
            margin: 0 4px;
            padding: 8px 12px;
            background-color: #eee;
            border: 1px solid #ddd;
            border-radius: 4px;
            transition: background-color 0.3s, color 0.3s;
            /* Hiệu ứng hover */
        }

        .pagination li a {
            text-decoration: none;
            color: #333;
        }

        .pagination li:hover {
            background-color: #337ab7;
            border-color: #2e6da4;
            color: #fff;
        }

        .pagination li.active {
            background-color: #337ab7;
            border-color: #2e6da4;
            color: #fff;
        }

        .pagination li.disabled {
            pointer-events: none;
            opacity: 0.6;
        }
        </style>
        <?php if ($showPagination): ?>
        <div class="col-md-6 div col-md-offset-3" style="margin-left: 300px;">
            <ul class="pagination">
                <?php
            $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
            if ($current_page > 1 && $pages > 1) {
                echo '<li><a href="index.php?action=sanpham&page' . ($current_page - 1) . '">Prev</a></li>';
            }
            for ($i = 1; $i <= $pages; $i++) {
                ?>
                <li><a href="index.php?action=sanpham&page=<?php echo $i; ?>">
                        <?php echo $i; ?>
                    </a></li>
                <?php
            }
            if ($current_page < $pages && $pages > 1) {
                echo '<li><a href="index.php?action=sanpham&page=' . ($current_page + 1) . '">Next</a></li>';
            }
            ?>
            </ul>
        </div>
        <?php endif; ?>
    </section>
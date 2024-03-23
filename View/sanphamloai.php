<section style=" background-image: url('Content/imagetourdien/BG.png');
            background-color: #3e3e3f ;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100%;">
    <div class="mb-5 mt-5 text-center">
        <a href="index.php?action=sanpham&act=sanphamkhuyenmai" style="text-decoration: none;color: #ffffff;">
            <i class="fab fa-apple" style="font-size: 40px; color: #ffffff;"></i>
            <span class="topzone-cateiphone christmas" style="font-size: 40px;">Sản Phẩm</span>
        </a>
    </div>
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
    <script>
    $(document).ready(function() {
        $(".col-lg-3.col-md-4.mb-3.text-left").hide().fadeIn(1000);
    });
    </script>
    <section id="examples" class="text-center">
        <div class="row container mx-auto">
            <?php
                if (isset($_GET['maloai'])) {
                    $maloai = $_GET['maloai'];
                    $hh = new hanghoa();
                    $products = $hh->getHangHoaByLoai($maloai);
                    if ($products) {
                        foreach ($products as $product) {
                ?>
            <div class="col-lg-3 col-md-4 mb-3 text-left ">
                <div class="custom-container">
                    <div class=" view overlay z-depth-1-half">
                        <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $product['mahh'] ?>">
                            <img src="Content/imagetourdien/apple.png" style="width: 79px; height: 28px; float:left">
                            <img src="Content/imagetourdien/product/<?php echo $product['hinh'] ?>"
                                class="mb-2 img-fluid mx-auto d-block" style="width: 70%;">
                            <div class="mask rgba-white-slight"></div>
                    </div>
                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $product['mahh'] ?>">
                        <p style="color: black;font-weight: bold;font-size: 15px;text-align: center;">
                            <?php echo $product['tenhh'] ?>
                        </p>
                    </a>
                    <h5 class="my-4 font-weight-bold text-center" style="color: red;">
                        <?php echo number_format($product['dongia']) ?><sup><u>đ</u></sup></br>
                    </h5>
                    <a href="index.php?action=sanpham&act=sanphamchitiet&id=<?php echo $set['mahh'];?>"
                        style="display: flex; justify-content: center; align-items: center;">
                        <button class="btn btn-danger">Xem Chi Tiết</button>
                    </a>
                </div>
            </div>
            <?php
            }
        } else {
            ?>
            <p>Loại sản phẩm này hiện không còn!</p>
            <?php
        }
    } else {
        ?>
            <p>Vui Lòng Chọn Loại Sản Phẩm</p>
            <?php
    }
    ?>
        </div>
    </section>
</section>
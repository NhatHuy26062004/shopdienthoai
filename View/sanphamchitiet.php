<section style=" background-image: url('Content/imagetourdien/BG.png');
            background-color: #3e3e3f ;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-position: top center;
            background-size: 100%;">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h3 class="mb-5 mt-5 font-weight-bold" style="color: #fff;">CHI TIẾT SẢN PHẨM</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <!-- Image Gallery -->
                <div class="container-fliud">
                    <div class="wrapper row">
                        <form action="index.php?action=giohang&act=giohang_action" method="post">
                            <?php
                                if (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                    $hh = new hanghoa();
                                    $sp = $hh->getHangHoaId($id);
                                    $soluongton = $hh->getSoLuongTon($id)[0]; 
                                    $tenhh = $sp['tenhh'];
                                    $mota = $sp['mota'];
                                    $dongia = $sp['dongia'];
                                    $giamgia = $sp['giamgia'];
                                }
                            ?>
                            <?php
                                $hinh = $hh->getHangHoaHinh($id);
                                $set = $hinh->fetch();
                            ?>
                            <div class="tab-content">
                                <div class="tab-pane active" id="">
                                    <img src="Content/imagetourdien/product/<?php echo $set['hinh'] ?>" alt=""
                                        style="width: 80%;float: right;">
                                </div>
                            </div>


                            <ul class="preview-thumbnail ">
                                <?php
                                    while ($img = $hinh->fetch()):
                                        ?>
                                <li class="active"><a href="#<?php echo $img['hinh']; ?>" data-toggle="tab">
                                        <img src="<?php echo 'Content/imagetourdien/iphone/' . $img['hinh']; ?>"
                                            alt="Học thiết kế web bán hàng Online"></a>
                                </li>
                                <?php
                                    endwhile;
                                    ?>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <input type="hidden" name="mahh" value="<?php echo $id ?>" />
                <h3 class="product-title">
                    <?php echo $tenhh ?>
                </h3>
                <div class="rating" style="color: yellow;">
                    <div class="stars">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <p class="product-description">
                    <?php echo $mota ?>
                </p>
                <?php if ($giamgia > 0): ?>
                <h4 class="price" style="text-decoration: line-through;">
                    Giá gốc:
                    <?php echo number_format($dongia) ?> đ
                </h4>
                <h4 class="final-price price">
                    Giá sale:
                    <?php echo number_format($giamgia) ?> đ
                </h4>
                <?php else: ?>
                <h4 class="price">
                    Giá bán:
                    <?php echo number_format($dongia) ?> đ
                </h4>
                <?php endif; ?>
                <h5 class="colors" style="color: #fff;">Màu:
                    <select name="mymausac" class="form-control" style="width:150px;">
                        <?php
                                $mau = $hh->getHangHoaMau($id);
                                while ($set = $mau->fetch()) {
                                    ?>
                        <option value="<?php echo $set['Idmau'] ?>">
                            <?php echo $set['mausac'] ?>
                        </option>
                        <?php
                                } ?>
                    </select><br>

                    <input type="hidden" name="size" id="size" value="">
                    <?php 
                    $isdisable =false;
                    $gioHang = new giohang();
                    $soLuongSanPham = $gioHang->getSoLuongMua($id);
                    $soluongconlai =$soluongton- $soLuongSanPham;
                    if ($soluongconlai ==0){
                        echo "<script> alert ('Sản Phẩm đã hết hàng') </script>";
                        $isdisable = true;
                    }
                    ?> Số Lượng: <input type="number" id="soluong" name="soluong" min="1"
                        max="<?php echo $soluongconlai; ?>" value="1" size="10" />
                    <br>
                </h5>

                <div class="action">
                    <button class="add-to-cart btn btn-primary" type="submit" data-toggle="modal" data-target="#myModal"
                        <?php if($isdisable) echo 'disabled'; ?>> MUA NGAY
                    </button>
                    <a href="http://hocwebgiare.com/" target="_blank">
                        <button class="like btn btn-primary" type="button"><span class="fa fa-heart"></span>
                        </button>
                    </a>
                </div>
            </div>
            </form>
        </div>
    </div>


    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <hr>
                <p class="float-left font-weight-bold" style="color: #fff;">Bình luận</p>

            </div>
        </div>
        <form action="" method="post">
            <div class="row">
                <div class="col-md-2">
                    <input type="hidden" name="txtmahh" value="" />
                    <img src="Content/imagetourdien/people.png" width="75px" height="50px" />
                </div>
                <div class="col-md-10">
                    <textarea class="form-control" name="comment" rows="2" cols="10"
                        placeholder="Thêm bình luận"></textarea>
                    <input type="submit" class="btn btn-primary mt-2 float-right" id="submitButton" value="Gửi" />
                </div>
            </div>
        </form>
        <div class="row mt-4">
            <div class="col-md-12">
                <hr>
                <p class="float-left font-weight-bold" style="color: #fff;">Các bình luận</p>
            </div>
        </div>
        <div class="row">
            <!-- Hiển thị các bình luận ở đây -->
        </div>
    </div>
</section>
<style>
.tab-content {
    overflow: hidden;
}

.preview-thumbnail {
    list-style: none;
    padding: 0;
    margin: 0;
}

.preview-thumbnail li {
    display: inline-block;
    margin-right: 10px;
}

.preview-thumbnail img {
    width: 50px;
    height: auto;
    cursor: pointer;
}

.product-details {
    padding: 30px 0;
}

.product-description {
    color: #fff;
}

.product-title {
    color: #fff;
}

.price {
    color: red;
}

.colors {
    margin-top: 10px;
}

.float-left {
    font-size: 18px;
}

hr {
    margin-top: 5px;
    margin-bottom: 15px;
    border-style: solid;
    /* Sử dụng kiểu đường kẻ dạng solid */
    border-width: 2px;
    /* Độ dày của đường kẻ */
    color: #fff;
}


textarea {
    width: 100%;
    margin-bottom: 10px;
}

#submitButton {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 8px 15px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#submitButton:hover {
    background-color: #0056b3;
}

/* Additional styles for the comment container */
.comment-container {
    background-color: #fff;
    padding: 15px;
    border-radius: 5px;
    margin-bottom: 15px;
}

.comment-container img {
    width: 50px;
    height: auto;
    margin-right: 10px;
}

.comment-container p {
    margin-bottom: 0;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container-fliud {
        width: 100%;
        padding: 0;
    }
}
</style>
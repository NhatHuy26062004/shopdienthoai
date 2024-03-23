<div class="table-responsive container">
    <?php
  function getSubTotal()
  {
    $subtotal = 0;
    foreach ($_SESSION['cart'] as $item) {
      $subtotal += $item['thanhtien'];
    }
    $subtotal = number_format($subtotal, 0);
    return $subtotal;
  }
  if (isset($_SESSION['cart']) && count($_SESSION['cart']) > 0) {

    ?>
    <form action="index.php?action=giohang&&act=update_cart" method="post">
        <h2 class="mt-5 mb-3" style="color: red;text-align: center;">THÔNG TIN GIỎ HÀNG</h2>
        <table class="table table-bordered">
            <thead>
                <tr class="table-success">
                    <th>Số TT</th>
                    <th>Thông Tin Sản Phẩm</th>
                    <th>Tùy Chọn Của Bạn</th>
                    <th colspan="2">Giá</th>
                </tr>
            </thead>
            <tbody>
                <?php
          $j = 0;
          foreach ($_SESSION['cart'] as $key => $item) {
            $soluongton = $item['soluongton'];
            $j++;
            ?>
                <tr>
                    <td>
                        <?php echo $j; ?>
                    </td>
                    <td><img width="50px" height="50px" src="Content/imagetourdien/product/<?php echo $item['hinh'] ?>">
                        <?php echo $item['tenhh'] ?>
                    </td>
                    <td>Màu:
                        <?php echo $item['mausac'] ?>
                    </td>
                    <td>Đơn Giá:
                        <?php
                if (isset($item['giamgia']) && $item['giamgia'] > 0) {
                  echo number_format($item['giamgia']) . '<br>';
                } else {
                  echo number_format($item['dongia']) . '<br>';
                }
                ?>
                        Số Lượng:
                        <input class="form-control" type="number" name="newqty[]" min="1"
                            max="<?php echo $soluongton['0'] ?>"
                            value="<?php echo min($item['soluong'], $item['soluongton']); ?>" />
                        <br />
                        <p style="float: right;"> Thành Tiền
                            <?php
                  echo number_format($item['thanhtien']) . ' <sup><u>đ</u></sup>';
                  ?>
                        </p>
                    </td>
                    <td style="text-align: center;" class="pt-5">
                        <?php if ($item['soluong'] < $item['soluongton']): ?>
                        <a href="index.php?action=giohang&&act=delete_cart&id=<?php echo $key ?>">
                            <button type="button" class="btn delete">Xóa</button>
                        </a>
                        <?php else: ?>
                        <button type="button" class=" btn ">Xóa</button></a>

                        <?php endif; ?>
                    </td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3">
                        <b>Tổng Tiền</b>
                    </td>
                    <td style="float: right;">
                        <b>
                            <?php echo (getSubTotal()); ?> <sup><u>đ</u></sup>
                        </b>
                    </td>
                    <td><a href="index.php?action=thanhtoan">Thanh toán</a></td>
                </tr>
                <tr>
                    <td colspan="5" style="text-align: right; padding-right:50px">
                        <a href=""><button type="submit" class="btn edit">Sửa</button></a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <?php
  } else {
    echo '<script> alert("Chưa có hàng");</script>';
    echo '<meta http-equiv="refresh" content="0;url=./index.php?action=home"/>';
  }
  ?>
</div>
</div>
<style>
.delete {
    background-color: red;
    color: white;
    font-size: larger;
}

.edit {
    background-color: blue;
    color: white;
    font-size: larger;
}

.form-control {
    width: 70px;
    font-size: 15px;
}
</style>
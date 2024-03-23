<?php

class hoadon
{
    // Phương thức insert vào bảng hoadon
    public function insertHoaDon($makh)
    {
        $db = new Connect();
        $date = new DateTime('now');
        $ngay = $date->format('Y-m-d'); // vì trong database là y-m-d
        $query = "INSERT INTO hoadon (masohd, makh, ngaydat, tongtien) VALUES (NULL, $makh, '$ngay', 0)";
        $db->exec($query);

        // Đã chèn xong vào bảng hoadon, nó sinh ra mã số hóa đơn
        $select = "SELECT a.masohd FROM hoadon a ORDER BY a.masohd DESC LIMIT 1";
        $masohd = $db->getInstance($select);

        return $masohd[0]; // trả về mảng $masohd=array(9);
    }

    // Phương thức insert vào bảng cthoadon
    // Updated method signature without the "size" parameter
    // function insertCTHoaDon($masohd, $mahh, $soluongmua, $mausac, $thanhtien)
    // {
    //     $db = new connect();
    //     $query = "INSERT INTO cthoadon (masohd, mahh, soluongmua, mausac, thanhtien, tinhtrang) VALUES ($masohd, $mahh, $soluongmua, '$mausac', $thanhtien, 8)";
    //     $db->exec($query);
    // }
    function insertCTHoaDon($masohd, $mahh, $soluongmua, $mausac, $thanhtien)
    {
        $db = new Connect();
    
        // Check if the product is already in the cart
        $checkQuery = "SELECT * FROM cthoadon WHERE masohd = $masohd AND mahh = $mahh";
        $existingRecord = $db->getInstance($checkQuery);
    
        if ($existingRecord) {
            // If the product is already in the cart, update the quantity
            $newQuantity = $existingRecord['soluongmua'] + $soluongmua;
            $updateQuery = "UPDATE cthoadon SET soluongmua = $newQuantity WHERE masohd = $masohd AND mahh = $mahh";
            $db->exec($updateQuery);
        } else {
            // If the product is not in the cart, insert a new record
            $query = "INSERT INTO cthoadon (masohd, mahh, soluongmua, mausac, thanhtien, tinhtrang) VALUES ($masohd, $mahh, $soluongmua, '$mausac', $thanhtien, 8)";
            $db->exec($query);
        }
    }
    

    // Phương thức cập nhật tổng tiền
    public function updateTongTien($masohd, $makh, $tongtien)
    {
        $db = new Connect();
        $query = "UPDATE hoadon SET tongtien=$tongtien WHERE masohd=$masohd AND makh=$makh";
        $db->exec($query);
    }

    // phương thức lấy thông tin khách hàng mua hàng dựa vào mã số hd
    function selectThongTinKH($masohd)
    {
        $db = new connect();
        $select = "SELECT a.masohd, b.tenkh, b.diachi, b.sodienthoai, a.ngaydat
                FROM hoadon a, khachhang b
                WHERE a.makh = b.makh AND a.masohd = $masohd";
        $result = $db->getInstance($select);
        return $result;
    }

    // phương thức lấy thông tin hàng trên hóa đơn, tức là trên hóa đơn có bao nhiêu món hàng

    function selectThongTinHoaDon($masohd)
    {
        $db = new connect();
        $select = "SELECT DISTINCT a.tenhh, c.mausac, b.dongia, c.soluongmua
                FROM hanghoa a, cthanghoa b, cthoadon c
                WHERE a.mahh = b.idhanghoa AND a.mahh = c.mahh AND c.masohd = $masohd";
        $result = $db->getList($select);

        return $result;
    }  
}
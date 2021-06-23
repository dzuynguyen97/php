<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chia het cho cac so</title>
    <style>
        .col-1{
            width: 55%;
            height: auto;
            border-radius: 10px;
            background-color: white;
            border-color: #2E9AFE;
            border-style: solid;
            margin: auto;
            margin-top: 10%;
            text-align: center;
            
        }
        .col-2{
            background-color: #2E9AFE;
            padding: 5px;
            text-align: center;
        }
        .col-3{
            margin-top: 30px;
            text-align: center;
            margin: auto;
            padding: 5px;
        }
        table, th, td {
            border: 1px solid black;
        }
        #lbt-header{
            color: #FFFFFF;
        }
        #lbt-input-1{
            margin-left: 15px;
            font-size:20px;
        }
     
        #submit-form{
            background-color: #2E9AFE;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 16px;
            border-radius: 10px;
            margin-left: 10%;
        }

        #lbtChia{
            margin-left: 2%;
        }
        #input-css{
            outline: none;
            border-width:0px;
            border:none;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            padding: 5px;
        }

    </style>
</head>
<?php
    /**
     * define
     */
    $maHang1 = $maLoai1 = $sttHang1 = $giamGia1 = $soLuong1 = $thanhTien1 = "";
    $maHang2 = $maLoai2 = $sttHang2 = $giamGia2 = $soLuong2 = $thanhTien2 = "";
    $maHang3 = $maLoai3 = $sttHang3 = $giamGia3 = $soLuong3 = $thanhTien3 = "";
    $maHang4 = $maLoai4 = $sttHang4 = $giamGia4 = $soLuong4 = $thanhTien4 = "";
    $maHang5 = $maLoai5 = $sttHang5 = $giamGia5 = $soLuong5 = $thanhTien5 = "";
    $donGia1 = $donGia3 = "90000";
    $donGia2 = "35000";
    $donGia4 = "49000";
    $donGia5 = "85000";

    $kq1 = $kq2 = $kq3 = $kq4 = $kq5 = ""; 

    if(isset($_POST['caculator'])){
        /**
         * item 1
         */
        if(isset($_POST['maHang1']) && isset($_POST['soLuong1'])){
            $maHang1 = $_POST['maHang1'];
            $soLuong1 = $_POST['soLuong1'];
            if(is_numeric($soLuong1)){
                if(strlen($maHang1) >= 6) {
                    if(is_numeric($maHang1[strlen($maHang1)-1])) {
                        $maLoai1 = $maHang1[strlen($maHang1)-1];
                        $n = strlen($maHang1)/2;
                        $sttHang1 = $maHang1[$n-2].$maHang1[$n-1].$maHang1[$n];
                        $subTotal = $soLuong1*$donGia1;
                        if($maLoai1 == 2){
                            $giamGia1 = $subTotal*0.3;
                        }
                        if($maLoai1 == 1){
                            $giamGia1 = $subTotal*0.5;
                        }
                        $thanhTien1 = $subTotal - $giamGia1;
                    } else {
                        $kq1 = "Nhap vao dung ma mat hang";
                    }
                } else {
                    $kq1 = "Nhap vao dung ma mat hang";
                }
            } else {
                $kq1 = "Nhap dung so luong cho mat hang so 1";
            }
        } else {
            $kq1 = "Nhap vao ma hang va so luong";
        }

        /**
         * item 2
         */
        if(isset($_POST['maHang2']) && isset($_POST['soLuong2'])){
            $maHang2 = $_POST['maHang2'];
            $soLuong2 = $_POST['soLuong2'];
            if(is_numeric($soLuong2)){
                if(strlen($maHang2) >= 6) {
                    if(is_numeric($maHang2[strlen($maHang2)-1])) {
                        $maLoai2 = $maHang2[strlen($maHang2)-1];
                        $n = strlen($maHang2)/2;
                        $sttHang2 = $maHang2[$n-2].$maHang2[$n-1].$maHang2[$n];
                        $subTotal = $soLuong2*$donGia2;
                        if($maLoai2 == 2){
                            $giamGia2 = $subTotal*0.3;
                        }
                        if($maLoai2 == 1){
                            $giamGia2 = $subTotal*0.5;
                        }
                        $thanhTien2 = $subTotal - $giamGia2;
                    } else {
                        $kq2 = "Nhap vao dung ma mat hang";
                    }
                } else {
                    $kq2 = "Nhap vao dung ma mat hang";
                }
            } else {
                $kq2 = "Nhap dung so luong cho mat hang so 2";
            }
        } else {
            $kq2 = "Nhap vao ma hang va so luong";
        }

        /**
         * item 3
         */
        if(isset($_POST['maHang3']) && isset($_POST['soLuong3'])){
            $maHang3 = $_POST['maHang3'];
            $soLuong3 = $_POST['soLuong3'];
            if(is_numeric($soLuong3)){
                if(strlen($maHang3) >= 6) {
                    if(is_numeric($maHang3[strlen($maHang3)-1])) {
                        $maLoai3 = $maHang3[strlen($maHang3)-1];
                        $n = strlen($maHang3)/2;
                        $sttHang3 = $maHang3[$n-2].$maHang3[$n-1].$maHang3[$n];
                        $subTotal = $soLuong3*$donGia3;
                        if($maLoai3 == 2){
                            $giamGia3 = $subTotal*0.3;
                        }
                        if($maLoa3 == 1){
                            $giamGia3 = $subTotal*0.5;
                        }
                        $thanhTien3 = $subTotal - $giamGia3;
                    } else {
                        $kq3 = "Nhap vao dung ma mat hang";
                    }
                } else {
                    $kq3 = "Nhap vao dung ma mat hang";
                }
            } else {
                $kq3 = "Nhap dung so luong cho mat hang so 3";
            }
        } else {
            $kq3 = "Nhap vao ma hang va so luong";
        }

        /**
         * item 4
         */
        if(isset($_POST['maHang4']) && isset($_POST['soLuong4'])){
            $maHang4 = $_POST['maHang4'];
            $soLuong4 = $_POST['soLuong4'];
            if(is_numeric($soLuong4)){
                if(strlen($maHang4) >= 6) {
                    if(is_numeric($maHang4[strlen($maHang4)-1])) {
                        $maLoai4 = $maHang4[strlen($maHang4)-1];
                        $n = strlen($maHang4)/2;
                        $sttHang4 = $maHang4[$n-2].$maHang4[$n-1].$maHang4[$n];
                        $subTotal = $soLuong4*$donGia4;
                        if($maLoai4 == 2){
                            $giamGia4 = $subTotal*0.3;
                        }
                        if($maLoai4 == 1){
                            $giamGia4 = $subTotal*0.5;
                        }
                        $thanhTien4 = $subTotal - $giamGia4;
                    } else {
                        $kq4 = "Nhap vao dung ma mat hang";
                    }
                } else {
                    $kq4 = "Nhap vao dung ma mat hang";
                }
            } else {
                $kq4 = "Nhap dung so luong cho mat hang so 4";
            }
        } else {
            $kq4 = "Nhap vao ma hang va so luong";
        }

        /**
         * item 5
         */
        if(isset($_POST['maHang5']) && isset($_POST['soLuong5'])){
            $maHang5 = $_POST['maHang5'];
            $soLuong5 = $_POST['soLuong5'];
            if(is_numeric($soLuong5)){
                if(strlen($maHang1) >= 6) {
                    if(is_numeric($maHang5[strlen($maHang5)-1])) {
                        $maLoai5 = $maHang5[strlen($maHang5)-1];
                        $n = strlen($maHang5)/2;
                        $sttHang5 = $maHang5[$n-2].$maHang5[$n-1].$maHang5[$n];
                        $subTotal = $soLuong5*$donGia5;
                        if($maLoai5 == 2){
                            $giamGia5 = $subTotal*0.3;
                        }
                        if($maLoai5 == 1){
                            $giamGia5 = $subTotal*0.5;
                        }
                        $thanhTien5 = $subTotal - $giamGia5;
                    } else {
                        $kq5 = "Nhap vao dung ma mat hang";
                    }
                } else {
                    $kq5 = "Nhap vao dung ma mat hang";
                }
            } else {
                $kq5 = "Nhap dung so luong cho mat hang so 5";
            }
        } else {
            $kq5 = "Nhap vao ma hang va so luong";
        }
    }

?>
<body>
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">Xu ly bang</h3>
        </div>
        <form action="" method="post" class="col-3">
            <table class="col-3">
                <tr>
                    <td >STT</td>
                    <td>Mat Hang</td>
                    <td>Ma Hang</td>
                    <td>Ma Loai</td>
                    <td>STT Hang</td>
                    <td>Don Gia</td>
                    <td>So Luong</td>
                    <td>Giam Gia</td>
                    <td>Thanh Tien</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Kaki 1</td>
                    <td><input type="text" id="input-css" name="maHang1" value="<?php echo $maHang1; ?>"></td>
                    <td><?php echo $maLoai1; ?></td>
                    <td><?php echo $sttHang1; ?></td>
                    <td><?php echo $donGia1; ?></td>
                    <td><input type="text" id="input-css" name="soLuong1" value="<?php echo $soLuong1; ?>"></td>
                    <td><?php echo $giamGia1; ?></td>
                    <td><?php echo $thanhTien1; ?></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Shoes 1</td>
                    <td><input type="text" id="input-css" name="maHang2" value="<?php echo $maHang2; ?>"></td>
                    <td><?php echo $maLoai2; ?></td>
                    <td><?php echo $sttHang2; ?></td>
                    <td><?php echo $donGia2; ?></td>
                    <td><input type="text" id="input-css" name="soLuong2" value="<?php echo $soLuong2; ?>"></td>
                    <td><?php echo $giamGia2; ?></td>
                    <td><?php echo $thanhTien2; ?></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>T-Shirt 1</td>
                    <td><input type="text" id="input-css" name="maHang3" value="<?php echo $maHang3; ?>"></td>
                    <td><?php echo $maLoai3; ?></td>
                    <td><?php echo $sttHang3; ?></td>
                    <td><?php echo $donGia3; ?></td>
                    <td><input type="text" id="input-css" name="soLuong3" value="<?php echo $soLuong3; ?>"></td>
                    <td><?php echo $giamGia3; ?></td>
                    <td><?php echo $thanhTien3; ?></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Kaki 2</td>
                    <td><input type="text" id="input-css" name="maHang4" value="<?php echo $maHang4; ?>"></td>
                    <td><?php echo $maLoai4; ?></td>
                    <td><?php echo $sttHang4; ?></td>
                    <td><?php echo $donGia4; ?></td>
                    <td><input type="text" id="input-css" name="soLuong4" value="<?php echo $soLuong4; ?>"></td>
                    <td><?php echo $giamGia4; ?></td>
                    <td><?php echo $thanhTien4; ?></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Shoes 2</td>
                    <td><input type="text" id="input-css" name="maHang5" value="<?php echo $maHang5; ?>"></td>
                    <td><?php echo $maLoai5; ?></td>
                    <td><?php echo $sttHang5; ?></td>
                    <td><?php echo $donGia5; ?></td>
                    <td><input type="text" id="input-css" name="soLuong5" value="<?php echo $soLuong5; ?>"></td>
                    <td><?php echo $giamGia5; ?></td>
                    <td><?php echo $thanhTien5; ?></td>
                </tr>
                <tr>
                    <td colspan="9">
                        <input type="submit" value="Thanh Tien" name="caculator">
                        <input type="submit" value="Reset" name="reset">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
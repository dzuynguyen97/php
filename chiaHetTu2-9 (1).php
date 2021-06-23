<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chia het cho cac so</title>
    <style>
        .col-1{
            width: 70%;
            height: 300px;
            border-radius: 10px;
            background-color: #DAEEF0;
            border-color: #2E9AFE;
            border-style: solid;
            margin: auto;
            margin-top: 10%;
        }
        .col-2{
            background-color: #2E9AFE;
            padding: 5px;
            text-align: center;
        }
        .col-3{
            margin-top: 50px;
            text-align: center;
        }
        #lbt-header{
            color: #FFFFFF;
        }
        #lbt-input-1{
            margin-left: 15px;
            font-size:20px;
        }
        .col-3-1{
            display: inline-block;
            margin-left: 9%;
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
        .col-3-2{
            text-align: center;
            margin-top: 5%;
        }
        #lbtChia{
            margin-left: 2%;
        }
    </style>
</head>
<body>
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">Tinh Tong Chia Het Cho 11</h3>
        </div>
        <h3>
            <?php
                function tinhTong($start, $end){
                    $nTong = 0;
                    for($i = $start; $i <= $end; $i++){
                        if($i % 11 == 0){
                            $nTong += $i;
                        }
                    }
                    return $nTong;
                }
                if(isset($_POST['soDau']) && isset($_POST['soSau'])){
                    $soDau = $_POST['soDau'];
                    $soSau = $_POST['soSau'];
                    if(is_numeric($soDau) && is_numeric($soSau)){
                        $result = tinhTong($soDau, $soSau);
                    } else {
                        $result = "Xin moi nhap vao la so";
                    }
                }
            ?>
        </h3>
        <form action="" method="post" class="col-3">
            <label id="lbt-input-1">Tu: </label>
            <span><input type="text" id="first-number" name="soDau" value="<?php echo $soDau;?>"></span>

            <label id="lbt-input-1">Den: </label>
            <span><input type="text" id="last-number" name="soSau" value="<?php echo $soSau;?>"></span>
              
            <label id="lbt-input-1">Ket Qua: </label>
            <span><input type="text" id="last-number" name="ketQua" value="<?php echo $result;?>"></span>
              
            <br><br><br><input type="submit" name="submitForm" id="submit-form">
        </form>
    </div>
</body>
</html>
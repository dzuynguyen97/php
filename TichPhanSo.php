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
<?php

    function ucln2So($a, $b) //tim uoc 2 so
    { 
        if ($a == 0)
            return $b; 
        return ucln2So($b % $a, $a); 
    }

    function rutGon ($tuSo, $mauSo) {

        $uc2So = ucln2So($tuSo, $mauSo);

        $tuSo = $tuSo / $uc2So;
        $mauSo = $mauSo / $uc2So;

        $arr = ['tuSo' => $tuSo, 'mauSo' => $mauSo];
        return $arr;

    }

    function checkPS($phanSo) {
        $nSo = $phanSo;
        if($nSo == "") {
            return false;
        } else {
            $pos = substr_count($nSo, "/");
            if($pos != 1 && $pos != 0) { 
                return false;
            } else {
                $tach = explode("/", $nSo);
                $tuSo = $tach[0];
                $mauSo = $tach[1];
                if(!is_numeric($tuSo) || !is_numeric($mauSo)) {
                    return false;

                }
            }
        }
        return true;
        
    }
    
    if(isset($_POST['SoN'])) {
        $nSo = $_POST['SoN'];
        $nSo2 = $_POST['SoN2'];

        if(checkPS($nSo) && checkPS($nSo2)) {
            $tach1 = explode("/", $nSo);
            $tach2 = explode("/", $nSo);

            $TuSo = $tach1[0]*$tach2[0];
            $mauSo = $tach1[1]*$tach2[1];

            $result = rutGon($TuSo, $mauSo);

        } else {
            $result = "Du lieu dau vao ko dung";
        }
    }
    
?>
<body>
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">BÀI TOÁN PHÂN SỐ</h3>
        </div>
        <form action="" method="post" class="col-3">
            <label id="lbt-input-1">So thu 1: </label>
            <span><input type="text" id="first-number" name="SoN" value="<?php echo $nSo;?>"></span>
            <label id="lbt-input-1">So thu 2: </label>
            <span><input type="text" id="first-number" name="SoN2" value="<?php echo $nSo2;?>"></span>
            <br><br><br><input type="submit" name="submitForm" id="submit-form">
        </form>
        <?php
            if(isset($result['tuSo']) && isset($result['mauSo'])) {
                echo "Result: ".$result['tuSo']."/".$result['mauSo'];
            } else {
                echo $result;
            }
        ?>
    </div>
</body>
</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập số môn muốn đăng ký</title>
    <style>
        .col-1{
            width: 70%;
            height: 120%;
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
            margin-bottom: 10px;
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
    /**
     * int 
     */
    $tongSo = "";
    $tongCacSo = "";
    
    $soMon = [];
    /**
     * funtion caculate UCLN
     */
    

    if(isset($_POST['soMon'])) {
        $soMon = $_POST['soMon'];
        $tongCacSo = 0;
        foreach($soThu as $key => $value) {
            if(!is_numeric($value)) {
                $soMon[$key] = $value = 0;
            }
            $tongCacSo += $value;
        }
    }
   
   

    if(isset($_POST['resetForm'])) {
        $_POST['tongSo'] = 0;
        $tongCacSo = "";
        $ucNSo = "";
    }
?>
<body>
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">Đăng ký môn học</h3>
        </div>
        <form action="" method="post" class="col-3">
            <label id="lbt-input-1">Số môn cần đăng ký: </label>
            <span><input type="text" id="first-number" name="tongSo" value="<?php echo $tongSo;?>"></span><br><br>
            <?php
                if(isset($_POST['tongSo']) && isset($_POST['submitForm'])) {
                    $tongSo = $_POST['tongSo'];
                    if(is_numeric($tongSo)) {
                        for($i = 0; $i < $tongSo; $i++) {
                            echo "Môn thứ ".$i+1;
                            ?>
                                <input type="text" name="soMon[]" value="<?php echo $soMon[$i]?>"></br></br>
                            <?php
                        }
                    } else {
                        $result = "Xin moi nhap vao mot so";
                    }
                }
            ?>
            <!-- <?php if(isset($result)) { echo $result;}?> -->
            
         

            <br><br><br><input type="submit" name="submitForm" id="submit-form">
            <input type="submit" name="resetForm" id="submit-form" value="Reset"></br>
        </form>
    </div>
</body>
</html> 
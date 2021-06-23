<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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

    </style>
 
<body>
<?php

function ucln2So($a, $b) 
            { 
                if ($a == 0) 
                    return $b; 
                return ucln2So	($b % $a, $a); 
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

if(isset($_POST['phanso'])) {
        $nSo = $_POST['phanso'];
       

        if(checkPS($nSo)) {
            $tach1 = explode("/", $nSo);
          
            $TuSo = $tach1[0];
            $mauSo = $tach1[1];

            $result = rutGon($TuSo, $mauSo);

        } else {
            $result = "Du lieu dau vao ko dung";
        }
    }
?>
<form action="" method="post" class="col-3">
            Nhap vao phan so: <input type="text" name="phanso">
            <input type="submit" name="display" value="Nhap So">
           
        </form>
        <?php 
       if(isset($result['tuSo']) && isset($result['mauSo'])) {
                echo "Result: ".$result['tuSo']."/".$result['mauSo'];
            } else {
                echo $result;
            }
        ?>
</body>
</html>
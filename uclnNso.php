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
</head>
<body>
    
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">UCLN</h3>
        </div>
        <form action="" method="post" class="col-3">
            Nhap vao N: <input type="text" name="yourN">
            <input type="submit" name="display" value="Nhap So">
            <?php
            /**
             * funtion caculate UCLN
             */
            function ucln2So($a, $b) 
            { 
                if ($a == 0) 
                    return $b; 
                return ucln2So($b % $a, $a); 
            }

            function uclnNso($array){
                $result = $array[0];
                foreach($array as $key => $value){
                    $result = ucln2So($value, $result);
                }
                return $result;
            }

                $n = 0;
                $result = "";
                $arrayInput = [];
                if(isset($_POST['yourN']) && isset($_POST['display']))
                {
                    if(is_numeric($_POST['yourN']))
                    {
                        if($_POST['yourN'] >= 2){
                            $n = $_POST['yourN'];
                            for($i = 1; $i <= $n; $i++){
                                echo "<br><br>So thu ". $i. ": <input type='text' name='arrayInput[]'>";
                            }
                            echo "<br><br><br><input type='submit' id='submit-form' name='submit'>";
                        } else {
                            $result = "Nhap so luong so tu 2 so tro len";
                        }   
                    } else {
                        $result = "Vui long nhap vao la so";
                    }
                }
                if(isset($_POST['submit'])){
                    $arrayInput = $_POST['arrayInput'];
                    $arrayInput = array_filter($arrayInput, 'is_numeric');
                    $result = "Ket qua: ".uclnNso($arrayInput);
                }
                echo "<br><br><b>". $result ."</b>";
            ?>
        </form>
    </div>
</body>
</html>
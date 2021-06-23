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
            text-align: left;
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
<body>
    <div class="col-1">
        <div class="col-2">
            <h3 id="lbt-header">Array</h3>
        </div>
        <form action="" method="post" class="col-3">
            <?php
                $array = [
                    "Pham Quang Huy" => ["NS" => "14/12/2000"
                , "Que Quan" => "Bac Giang"],

                "Pham Quang Minh" => ["NS" => "10/10/2009"
                , "Que Quan" => "Bac Giang"],

                "Nguyen Mai Trang" => ["NS" => "18/09/2000"
                , "Que Quan" => "Ha Giang"],

                "Nguyen Thi Hanh" => ["NS" => "10/03/1997"
                , "Que Quan" => "Ha Noi"],

                "Tran Van Long" => ["NS" => "2/3/1989"
                , "Que Quan" => "Cao Bang"],

                "Nguyen Van Hop" => ["NS" => "05/11/1999"
                , "Que Quan" => "Hai Duong"],
                ];

                echo "1) List danh sach: <pre>";
                print_r($array);
                echo "</pre><br><br>";

                echo "2) Trich xuat mang <pre><br>";
                print_r(array_keys($array));
                echo "</pre><br><br>";

                echo "3) Trich xuat mang thong tin <pre><br>";
                print_r(array_values($array));
                echo "</pre><br><br>";

                echo "4) Hien thi danh sach sinh vien<br>";
            ?>
                <table class="col-3">
                    <tr id="row-1">
                        <td colspan="7" >Danh sach nhan vien</td>
                    </tr>
                    <tr>
                        <td ><b>STT</b></td>
                        <td><b>Ho va Ten</b></td>
                        <td><b>Ngay Sinh</b></td>
                        <td><b>Que quan</b></td>
                    </tr>
                    <?php
                        $i = 0;
                        foreach($array as $key => $value){
                            $i++;
                            echo "<tr>
                                <td>".$i."</td>
                                <td>".$key."</td>
                            ";
                            foreach($value as $subKey => $subValue){
                                echo "<td>".$subValue."</td>";
                            }
                            echo "</tr>";
                        }
                    ?>
                </table>
            <?php
            ?>
            
        </form>
    </div>
</body>
</html>
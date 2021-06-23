<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       
        <div>
           <!--  <form method="post" action="php25022021.php">
                <input type="text" name="number" value=""/>
                <input type="submit" name="check" value="Kiểm tra"/>
            </form> -->
             <?php
     
        // if (isset($_POST['check']))
        // {
            
        //     $number = (int)$_POST['number'];
             function Tong($x,$y,$a){
            $Tong=0;
             for ($i=$x ; $i < $y  ; $i++ ) { 
                 if ($i % $a == 0){
                        $Tong+=$i;
                              }
                        }
                 return Tong;
            }
            $kq=Tong(1,100,2);

             echo "tổng các số chia hết cho 2 là $kq";
        // }
        ?>
        </div>
    </body>
</html>
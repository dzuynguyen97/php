<html>
<body>
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
 <form action="" method="post" class="col-3">
            Ten đăng nhập: <input type="text" name="user"><br>
            Mat khau : <input type="text" name="mk"><br>
            <center><input type="submit" name="submit" value="Dang nhap"></center>
        </form>
 <?php
    if(isset($_GET["submit"])){
        setcookie("user",$_GET["user"],time()+10);
        setcookie("mk",$_GET["mk"],time()+10);
        header("location: showcookie.php");
    }
 ?>
</body>
</html>
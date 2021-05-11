 <?php 
    session_start();
    require 'libs/xu_ly_su_kien.php';
 ?>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <script type="text/javascript" src="js/jquery.1.js">
        $(document).ready(function (){
            alert("Hello");
            document.write("Hello word");
        });</script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
    </head>
        
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container">
                <p> <h2>Đăng Nhập </h2>
                <p> Tài khoản: <input type="text" name="user" value="<?php if(isset($_POST['user'])) echo $_POST['user'] ?>"/>
                <p> Mật khẩu:  <input type="password" name="pass" value="<?php if(isset($_POST['pass'])) echo $_POST['pass'] ?>"/>
                <p> <input type="submit" name="btn" value="Đăng nhập" class="btn btn-danger"/> 
                <p> <span class="psw1"> <a href="#">Đăng ký</a></span>
                    <span class="psw2"> <a href="#">Quên mật khẩu?</a></span>
            </div>                        
        </form>
            
    </body>
        
        
</html>
<?php
session_start();
/*
if (isset($_SESSION['username'])) {
    header("location: Trangchu.php");
    die;
} else {
    header("location: Dang_Nhap.php");
    die;
}
*/
if (isset($_SESSION['username'])){
    unset($_SESSION['username']);
    unset($_SESSION['usertype_id']); // xóa session login
    
}
?>
<html>
    <head>
        <title>Đăng nhập</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-orange.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/border.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">

    </head>
    <body>
        <?php
        //include ('menu.php');
        ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="container mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr><h2><th>Đăng nhập</th></h2></tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td><p> Tài khoản: <input type="text" name="user" value="<?php if (isset($_POST['user'])) echo $_POST['user'] ?>"/></td>
                        </tr>
                        <tr>
                            <td><p> Mật khẩu:  <input type="password" name="pass" value="<?php if (isset($_POST['pass'])) echo $_POST['pass'] ?>"/></td>
                        </tr>
                        <tr>
                            <td><p> <input type="submit" name="btn" value="Đăng nhập" class="btn btn-danger"/></td>
                        </tr>
                        <tr>
                            <td><p> <span class="psw1"> <a href="Dang_Ky.php">Đăng ký</a></span>
                                    <span class="psw2"> <a href="#">Quên mật khẩu?</a></span></td>
                        </tr>
                    </tbody>
                </table>



            </div>
            <script>
                $(document).ready(function () {
                    $("#myInput").on("keyup", function () {
                        var value = $(this).val().toLowerCase();
                        $("#myTable tr").filter(function () {
                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                        });
                    });
                });
            </script>

            <?php
            if (isset($_POST['btn'])) {

                //Kết nối tới database
                include('libs/connect.php');

                //Lấy dữ liệu nhập vào
                $username = addslashes($_POST['user']);
                $password = addslashes($_POST['pass']);

                //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
                if (!$username || !$password) {
                    echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }

                // mã hóa pasword
                $password = md5($password);

                //Kiểm tra tên đăng nhập có tồn tại không
                $query = mysqli_query($conn, "SELECT username, password FROM tb_users WHERE username='$username'");
                if (mysqli_num_rows($query) == 0) {
                    echo "Tài khoản này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }

                //Lấy mật khẩu trong database ra
                $row = mysqli_fetch_assoc($query);

                //So sánh 2 mật khẩu có trùng khớp hay không
                if ($password != $row['password']) {
                    echo "Tài khoản hoặc mật khẩu không đúng. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                    exit;
                }


                //Lưu tên đăng nhập và loại người dùng
                $_SESSION['username'] = $username;
                $_SESSION['time_login'] = time();
                header("location: Trangchu.php");
                die();
            }
            ?>


        </form>
    </body>
</html>

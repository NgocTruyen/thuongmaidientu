<?php
session_start();
if (isset($_SESSION['username'])) {
    /*if ($_SESSION['level'] == 1) {
        header("location: student_list.php");
        die;
    } else {
        header("location: student_list_member2.php");
        die;
    } */
}
?>
<html>
    <head>
        <title>Đăng ký</title>
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
        include 'menu.php';
        ?>
        <form action="libs/xuly_DangKy.php" method="POST" enctype="multipart/form-data">
            <div class="container mt-3">
                <table class="table table-bordered">
                    <thead>
                        <tr><h2><th>Đăng ký tài khoản</th></h2></tr>
                    </thead>
                    <tbody id="myTable">
                        <tr>
                            <td>Tên đăng nhập : <input type="text" name="username" size="50" /></td>
                        </tr>
                        <tr>
                            <td>Mật khẩu : <input type="password" name="password" size="50" /></td>
                        </tr>
                    </tbody>
                </table>
                <div> 
                    <input type="submit" name="dangky" value="Đăng ký" class="btn btn-danger"/>
                    <input type="reset" value="Nhập lại" class="btn btn-danger"/>
                </div>
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
                if (isset($_POST['dangky'])) {
                    include 'libs/xuly_DangKy.php';
                }
            ?>


        </form>
    </body>
</html>

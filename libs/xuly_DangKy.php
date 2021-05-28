<?php

if (!isset($_POST['username'])) {
    die('');
}

// Nhúng file connect.
include 'connect.php';

// Get dữ liệu từ web
$username = addslashes($_POST['username']);
$password = addslashes($_POST['password']);

if (!$username || !$password) {
    echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

// Mã khóa mật khẩu
$password = md5($password);

//Kiểm tra username đã được sử dụng chưa.
if (mysqli_num_rows(mysqli_query($conn, "SELECT username FROM tb_users WHERE username='$username'")) > 0) {
    echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
    exit;
}

 @$addmember = mysqli_query($conn,"
        INSERT INTO tb_users (
            username,
            password
        )
        VALUE (
            '{$username}',
            '{$password}'
        )
    ");
   if ($addmember)
        echo "Quá trình đăng ký thành công. <a href='http://localhost/thuongmaidientu/Dang_Nhap.php'>Về trang Đăng nhập</a>";
    else
        echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='Dang_Ky.php'>Thử lại</a>";
?>
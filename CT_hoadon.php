<?php
require 'libs/tb_chitiet_hoadon.php';
    
$cthd = get_all_CT_hoadon();
disconnect_db();
?>
<html>
    <head>
        <title>Chi tiết hóa đơn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
        
    <body>
        <form action="" method="post" enctype="multipart/form-data">
            <table class="table">
                <tbody>
                    <tr class="success">
                        <th colspan="5"><h3>Chi tiết hóa đơn: </h3> </th>
                </tr>
                <tr class="info">
                    <th >Mã hóa đơn</th>
                    <th >Mã sản phẩm</th>
                    <th >Số lượng</th>
                    <th >Giá bán</th>
                    <th >Mã giảm giá</th>
                </tr>
				<?php foreach ($cthd as $item){ ?>
                <tr class="danger">
                    <td><?php echo $item['mahoadon']; ?></td>
                    <td><?php echo $item['masp']; ?></td>
                    <td><?php echo $item['soluong']; ?></td>
                    <td><?php echo $item['magiamgia']; ?></td>
                    <td><?php echo $item['thanhtien']; ?></td>
                    <td>
                        
                    </td>
                </tr>
            <?php } ?>
                </tbody>
            </table>
        </form>
            
    </body>
</html>

<html lang="en">
    <head>
        <title>Mã giảm giá</title>
        <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-deep-orange.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="css/border.css">
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <style>
            .fakeimg {
                height: 200px;
                background: #aaa;
            }
        </style>



    </head>

    <body>
        <?php
        include 'menu1.php';
        ?>

        <div class="container mt-3">
            <h2>Bảng mã giảm giá</h2>
            <p></p>  
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã giãm giá</th>
                        <th>Ngày áp dụng</th>
                        <th>Được giãm</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <tr>
                        <td>ABC1C2</td>
                        <td>19/8/2021</td>
                        <td>20%</td>
                    </tr>
                    <tr>
                        <td>MSC1D2</td>
                        <td>22/5/2021</td>
                        <td>10%</td>
                    </tr>

                </tbody>
            </table>

            <p></p>
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

    </body>
</html>
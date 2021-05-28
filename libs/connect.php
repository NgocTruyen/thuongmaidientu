<?php

global $conn;

      $conn = mysqli_connect('localhost', 'root','', 'thuongmaidientu') 
              or die ('Can\'t not connect to database');
        // Thiết lập font chữ kết nối
        mysqli_set_charset($conn, 'utf8');


function disconnect_db() { //ngắt kết nối.
    global $conn;
    if ($conn) {
        mysqli_close($conn);
    }
}

?>


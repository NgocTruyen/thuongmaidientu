<?php

global $conn; // Biến kết nối toàn cục.
			
	function connect_db() // Hàm kết nối database.
	{
		global $conn;
		if (!$conn){
			$conn = mysqli_connect('localhost', 'root', '', 'db_thuongmaidientu_php') or die ('Can not connect to database');
			mysqli_set_charset($conn, 'utf8'); // Thiết lập font chữ kết nối utf8.
		}
	}
        
	function disconnect_db() // Hàm ngắt kết nối.
	{
		global $conn;
		if ($conn){
			mysqli_close($conn);
		}
	}
	
	function get_all_CT_hoadon() // Hàm lấy sinh viên theo ID.
	{
		global $conn;
		connect_db();
		$sql = "select * from tb_chititet_hoadon";
		$query = mysqli_query($conn, $sql);
		$result = array();
		if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
		return $result;
	}


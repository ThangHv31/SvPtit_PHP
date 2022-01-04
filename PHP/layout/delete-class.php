<?php
	session_start();
	if($_SESSION['tk']=="hoangthang@gmail.com" && $_SESSION['mk']=="12456"){
		$id_class = $_GET['id_class'];
		include_once './connectDb.php';
		$sql = "DELETE FROM class WHERE id_class = $id_class";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-class');
	}else{
		header('location:admin.php');
	}
?>
<?php
	session_start();
	if($_SESSION['tk']=="hoangthang@gmail.com" && $_SESSION['mk']=="12456"){
		$id_teacher = $_GET['id_teacher'];
		include_once './connectDb.php';
		$sql = "DELETE FROM list_teacher WHERE id_teacher = $id_teacher";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-tea');
	}else{
		header('location:admin.php');
	}
?>
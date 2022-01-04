<?php
	session_start();
	if($_SESSION['tk']=="hoangthang@gmail.com" && $_SESSION['mk']=="12456"){
		$id_User = $_GET['id_User'];
		include_once './connectDb.php';
		$sql = "DELETE FROM user WHERE id_User = $id_User";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-user');
	}else{
		header('location:admin.php');
	}
?>
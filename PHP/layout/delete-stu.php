<?php
	session_start();
	if($_SESSION['tk']=="hoangthang@gmail.com" && $_SESSION['mk']=="12456"){
		$id_student = $_GET['id_student'];
		include_once './connectDb.php';
		$sql = "DELETE FROM list_student WHERE id_student = $id_student";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-stu');
	}else{
		header('location:admin.php');
	}
?>
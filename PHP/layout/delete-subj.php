<?php
	session_start();
	if($_SESSION['tk']=="hoangthang@gmail.com" && $_SESSION['mk']=="12456"){
		$id_subject = $_GET['id_subject'];
		include_once './connectDb.php';
		$sql = "DELETE FROM subject WHERE id_subject = $id_subject";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-subj');
	}else{
		header('location:admin.php');
	}
?>
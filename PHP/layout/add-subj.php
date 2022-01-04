<?php
include_once('connectDb.php');
$error = NULL;
$sqlUser = "SELECT * FROM subject ";
$queryUser = mysqli_query($conn, $sqlUser);

if(isset($_POST['submit'])){
        // Bẫy lỗi để trống trường dữ liệu trong Form

	if($_POST['subjectName'] == ''){
		$error_subjectName = '<span style="color:red;">(*)<span>';
	}
	else{
		$subjectName = $_POST['subjectName'];
	}

	if($_POST['credit'] == ''){
		$error_credit = '<span style="color:red;">(*)<span>';
	}
	else{
		$credit = $_POST['credit'];
	}

	
	if(isset($subjectName) && isset($credit)){


		$sql = "INSERT INTO subject (subjectName,credit) VALUES ('$subjectName','$credit')";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-subj');
	}
}
?>

<div class="container col-9 bg-white">
	<h3>Thêm Môn Học</h3>
	<form method="post" 
	enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Tên Môn Học</label>
		<input  type="text" name="subjectName" 
		class="form-control" 
		required="required"></input>
	</div>
	<div class="form-group">
		<label for="title">Số Tín Chỉ  </label>
		<input  type="number" name="credit" 
		class="form-control"  
		required="required"></input>
	</div>
</div>

<a href="admin.php?page_layout=list-subj" class="btn btn-secondary active"
role="button" aria-pressed="true">Back to list</a>
<button type="submit" name="submit"  class="btn btn-primary">Save</button>

</form>
</div>
<?php

$id_subject = $_GET['id_subject'];

$sqlUser = "SELECT * FROM subject ";
$queryUser = mysqli_query($conn, $sqlUser);


$sql = "SELECT * FROM subject WHERE id_subject = $id_subject";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);



if(isset($_POST['submit'])){
         
	
	$subjectName = $_POST['subjectName'];
	
	$credit = $_POST['credit'];

	

	if(isset($subjectName) && isset($credit) ){


		$sql = "UPDATE subject  SET subjectName = '$subjectName',credit ='$credit' WHERE   id_subject = $id_subject";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-subj');
	}
}

?>

<div class="container col-9 bg-white">
	<h3>Sửa Sản Phẩm</h3>
	<form method="post" enctype="multipart/form-data">

		<hidden path="id" />
		<div class="form-group">
			<label for="title">Tên Môn Học</label>
			<input  type="text" name="subjectName" value=" <?php if(isset($_POST['subjectName'])){echo $_POST['subjectName'];}else{echo $row['subjectName'];} ?>" class="form-control" required="required">
		</input>
	</div>
	<div class="form-group">
		<label for="title"> Số Tín Chỉ  </label>
		<input  type="number" name="credit" value="<?php if(isset($_POST['credit'])){echo $_POST['credit'];}else{echo $row['credit'];}?>" class="form-control"  required="required"></input>
	</div>
	
<a href="admin.php?page_layout=list-subj" class="btn btn-secondary active"
role="button" aria-pressed="true">Quay Lại</a>
<button type="submit" name="submit"  class="btn btn-primary">Cập Nhập</button>

</form>
</div>

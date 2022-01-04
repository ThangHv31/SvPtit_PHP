<?php

$id_class = $_GET['id_class'];

$sqlSubj = "SELECT * FROM subject ";
$querySubj = mysqli_query($conn, $sqlSubj);

$sqlTea = "SELECT * FROM user,list_teacher,class WHERE class.id_teacher = list_teacher.id_teacher AND user.id_User = list_teacher.id_User";
$queryTea = mysqli_query($conn, $sqlTea);

$sqlSem = "SELECT * FROM semester ";
$querySem = mysqli_query($conn, $sqlSem);

$sql = "SELECT * FROM class WHERE id_class = $id_class";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);



if(isset($_POST['submit'])){

	
	$className= $_POST['className'];
	
	$id_subject = $_POST['id_subject'];

	$id_teacher = $_POST['id_teacher'];

	$id_semester = $_POST['id_semester'];
	
	$note = $_POST['note'];
	


	if(isset($className) && isset($id_subject) && isset($id_teacher) && isset($id_semester) && isset($note)){
		$sql = "UPDATE class  SET className = '$className',id_subject ='$id_subject', id_teacher = '$id_teacher', id_semester = '$id_semester', note = '$note' WHERE   id_class = $id_class";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-class');
	}
}

?>

<div class="container col-9 bg-white">
	<h3>Sửa Sản Phẩm</h3>
	<form method="post" enctype="multipart/form-data">

		<hidden path="id" />
		<div class="form-group">
			<label for="title">Tên Lớp </label>
			<input  type="text" name="className" value=" <?php if(isset($_POST['className'])){echo $_POST['className'];}else{echo $row['className'];} ?>" class="form-control" required="required">
		</input>
	</div>

	<div class="form-group">
		<label for="title">Tên Môn Học </label>
		<select name='id_subject' class="form-control">
			<?php 
			while ( $rowSubj = mysqli_fetch_array($querySubj)) {

				?>
				<option value=" <?php echo $rowSubj['id_subject'] ?>"><?php
				echo $rowSubj['subjectName']
				?>
			</option>
			<<?php 
		}
		?>
	</select>
</div>

<div class="form-group">
	<label for="title">Tên Giảng Viên </label>
	<select name='id_teacher' class="form-control">
		<?php 
		while ( $rowTea = mysqli_fetch_array($queryTea)) {
			
			?>
			<option value="<?php
			echo $rowTea['id_teacher']
			?>"><?php echo $rowTea['firstName'];?>  <?php echo $rowTea['lastName'];?>
		</option>
		<?php 
	}
	?>
</select>
</div>
<div class="form-group">
	<label for="title">Học Kì </label>
	<select name='id_semester' class="form-control">
		<?php 
		while ( $rowSem = mysqli_fetch_array($querySem)) {
			
			?>
			<option value="<?php
			echo $rowSem['id_semester']
			?>"><?php
			echo $rowSem['semesterName']
			?>
		</option>
		<?php 
	}
	?>
</select>
</div>
<div class="form-group">
	<label for="title">Note  </label>
	<input  type="text" name="note" value="<?php if(isset($_POST['note'])){echo $_POST['note'];}else{echo $row['note'];}?>" class="form-control"  required="required"></input>
</div>

<a href="admin.php?page_layout=list-class" class="btn btn-secondary active"
role="button" aria-pressed="true">Quay Lại</a>
<button type="submit" name="submit"  class="btn btn-primary">Cập Nhập</button>

</form>
</div>

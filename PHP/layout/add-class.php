<?php
include_once('connectDb.php');
$error = NULL;
$sqlSubj = "SELECT * FROM subject ";
$querySubj = mysqli_query($conn, $sqlSubj);

$sqlTea = "SELECT * FROM user,list_teacher WHERE  user.id_User = list_teacher.id_User";
$queryTea = mysqli_query($conn, $sqlTea);

$sqlSem = "SELECT * FROM semester ";
$querySem = mysqli_query($conn, $sqlSem);



if(isset($_POST['submit'])){


	if($_POST['className'] == ''){
		$error_firstName = '<span style="color:red;">(*)<span>';
	}
	else{
		$className = $_POST['className'];
	}

	if($_POST['id_subject'] == ''){
		$error_id_subject = '<span style="color:red;">(*)<span>';
	}
	else{
		$id_subject = $_POST['id_subject'];
	}

	if($_POST['id_teacher'] == ''){
		$error_id_teacher = '<span style="color:red;">(*)<span>';
	}
	else{
		$id_teacher = $_POST['id_teacher'];
	}

	if($_POST['id_semester'] == ''){
		$error_id_semester = '<span style="color:red;">(*)<span>';
	}
	else{
		$id_semester = $_POST['id_semester'];
	}

	if($_POST['note'] == ''){
		$error_note = '<span style="color:red;">(*)<span>';
	}
	else{
		$note = $_POST['note'];
	}

	if(isset($className) && isset($id_subject) && isset($id_teacher) && isset($id_semester) && isset($note) ){


		$sql = "INSERT INTO class (className,id_subject,id_teacher,id_semester,note) VALUES ('$className','$id_subject','$id_teacher','$id_semester','$note')";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-class');
	}
}
?>

<div class="container col-9 bg-white">
	<h3>Thêm Mới Lớp Học</h3>
	<form method="post" 
	enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Tên Lớp</label>
		<input  type="text" name="className" 
		class="form-control" 
		required="required"></input>
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
	<label for="title">Ghi Chú </label>
	<input type="text" name="note" 
	class="form-control"  
	required="required"></input>
</div>

<a href="admin.php?page_layout=list-class" class="btn btn-secondary active"
role="button" aria-pressed="true">Back to list</a>
<button type="submit" name="submit"  class="btn btn-primary">Save</button>

</form>
</div>
<?php
include_once('connectDb.php');
$error = NULL;
$sqlUser = "SELECT * FROM user WHERE id_User NOT IN(SELECT id_User FROM list_teacher) AND id_User NOT IN(SELECT id_User FROM list_student) ";
$queryUser = mysqli_query($conn, $sqlUser);

if(isset($_POST['submit'])){
        // Bẫy lỗi để trống trường dữ liệu trong Form

	if($_POST['id_User'] == ''){
		$error_id_User = '<span style="color:red;">(*)<span>';
	}
	else{
		$id_User = $_POST['id_User'];
	}

	if(isset($id_User)  ){


		$sql = "INSERT INTO list_teacher (id_User) VALUES ('$id_User')";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-tea');
	}
}
?>

<div class="container col-9 bg-white">
	<h3>Thêm Sinh Viên</h3>
	<form method="post" 
	enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Sinh Viên </label>
		<select name='id_User' class="form-control">
			<?php 
			while ( $rowUser = mysqli_fetch_array($queryUser)) {

				?>
				<option value="<?php
				echo $rowUser['id_User']
				?>"><?php echo $rowUser['firstName'];?>  <?php echo $rowUser['lastName'];?>
			</option>
			<?php 
		}
		?>
	</select>
</div>

<a href="admin.php?page_layout=list-tea" class="btn btn-secondary active"
role="button" aria-pressed="true">Back to list</a>
<button type="submit" name="submit"  class="btn btn-primary">Save</button>

</form>
</div>
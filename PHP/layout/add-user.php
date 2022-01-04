<?php
include_once('connectDb.php');
$error = NULL;
if(isset($_POST['submit'])){
        // Bẫy lỗi để trống trường dữ liệu trong Form

	if($_POST['firstName'] == ''){
		$error_firstName = '<span style="color:red;">(*)<span>';
	}
	else{
		$firstName = $_POST['firstName'];
	}

	if($_POST['lastName'] == ''){
		$error_lastName = '<span style="color:red;">(*)<span>';
	}
	else{
		$lastName = $_POST['lastName'];
	}

	if($_POST['dateOfBirth'] == ''){
		$error_dateOfBirth = '<span style="color:red;">(*)<span>';
	}
	else{
		$dateOfBirth = $_POST['dateOfBirth'];
	}

	if($_POST['username'] == ''){
		$error_username = '<span style="color:red;">(*)<span>';
	}
	else{
		$username = $_POST['username'];
	}

	if($_POST['password'] == ''){
		$error_password = '<span style="color:red;">(*)<span>';
	}
	else{
		$password = $_POST['password'];
	}

	if($_POST['email'] == ''){
		$error_email = '<span style="color:red;">(*)<span>';
	}
	else{
		$email = $_POST['email'];
	}

	$gender = $_POST['gender'];
		



	if(isset($firstName) && isset($lastName) && isset($dateOfBirth) && isset($username) && isset($password) && isset($email) && isset($gender) ){


		$sql = "INSERT INTO user (username,password,firstName,lastName,gender,dateOfBirth,email) VALUES ('$username','$password','$firstName','$lastName','$gender','$dateOfBirth','$email')";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-user');
	}
}
?>

<div class="container col-9 bg-white">
	<h3>Thêm Mới Sản Phẩm</h3>
	<form method="post" 
	 enctype="multipart/form-data">

	<div class="form-group">
		<label for="title">Họ Đệm </label>
		<input  type="text" name="firstName" 
		class="form-control" 
		required="required"></input>
	</div>
	<div class="form-group">
		<label for="title">Tên  </label>
		<input  type="text" name="lastName" 
		class="form-control"  
		required="required"></input>
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Ngày Sinh</label>
		<input type="date" name="dateOfBirth" class="form-control" id="exampleFormControlInput1">
	</div>
	<div class="form-group">
		<label for="title">UserName </label>
		<input type="text" name="username" 
		class="form-control" 
		required="required"></input>
	</div>
	<div class="form-group">
		<label for="title">Password </label>
		<input type="Password" name="password" 
		class="form-control"  
		required="required"></input>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email </label>
		<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@gmail.com">
	</div>

	<div class="form-group">
		<label >Giới Tính</label>
		<br />Nam <input type="radio" name="gender" value=1 /> Nữ <input checked="checked" type="radio" name="gender" value=0 />
	</div>
	<a href="admin.php?page_layout=list-user" class="btn btn-secondary active"
	role="button" aria-pressed="true">Back to list</a>
	<button type="submit" name="submit"  class="btn btn-primary">Save</button>

</form>
</div>
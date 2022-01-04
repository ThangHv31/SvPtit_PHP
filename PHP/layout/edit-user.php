<?php

$id_User = $_GET['id_User'];

$sqlUser = "SELECT * FROM user ";
$queryUser = mysqli_query($conn, $sqlUser);


$sql = "SELECT * FROM user WHERE id_User = $id_User";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($query);



if(isset($_POST['submit'])){
         
	
	$firstName = $_POST['firstName'];
	
	$lastName = $_POST['lastName'];

	$dateOfBirth = $_POST['dateOfBirth'];

	$username = $_POST['username'];
	
	$password = $_POST['password'];
	
	$email = $_POST['email'];

	$gender = $_POST['gender'];

	if(isset($firstName) && isset($lastName) && isset($dateOfBirth) && isset($username) && isset($password) && isset($email) && isset($gender) ){


		$sql = "UPDATE user  SET firstName = '$firstName',lastName ='$lastName', dateOfBirth = '$dateOfBirth', username = '$username', password = '$password', email = '$email', gender = '$gender' WHERE   id_User = $id_User";
		$query = mysqli_query($conn, $sql);
		header('location:admin.php?page_layout=list-user');
	}
}

?>

<div class="container col-9 bg-white">
	<h3>Sửa Sản Phẩm</h3>
	<form method="post" enctype="multipart/form-data">

		<hidden path="id" />
		<div class="form-group">
			<label for="title">Họ Đệm </label>
			<input  type="text" name="firstName" value=" <?php if(isset($_POST['firstName'])){echo $_POST['firstName'];}else{echo $row['firstName'];} ?>" class="form-control" required="required">
		</input>
	</div>
	<div class="form-group">
		<label for="title">Tên  </label>
		<input  type="text" name="lastName" value="<?php if(isset($_POST['lastName'])){echo $_POST['lastName'];}else{echo $row['lastName'];}?>" class="form-control"  required="required"></input>
	</div>
	<div class="form-group">
		<label for="exampleFormControlInput1">Ngày Sinh</label>
		<input type="date" name="dateOfBirth" value="<?php if(isset($_POST['dateOfBirth'])){echo $_POST['dateOfBirth'];}else{echo $row['dateOfBirth'];}?>" class="form-control" id="exampleFormControlInput1">
	</div>
	<div class="form-group">
		<label for="title">UserName </label>
		<input type="text" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}else{echo $row['username'];}?>" class="form-control" required="required">
	</input>
</div>
<div class="form-group">
	<label for="title">Password </label>
	<input type="Password" name="password" value="<?php if(isset($_POST['password'])){echo $_POST['password'];}else{echo $row['password'];}?>" class="form-control"  required="required">
</input>
</div>
<div class="form-group">
	<label for="exampleInputEmail1">Email </label>
	<input type="email" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else{echo $row['email'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="abc@gmail.com">
</div>

<div class="form-group">
	<label >Giới Tính</label>
	<br />Nam <input type="radio" name="gender"
	<?php 
	if($row['gender']==1){echo 'checked';} 
	?>
	value=1 />

	Nữ <input  type="radio" name="gender"
	<?php 
	if($row['gender']==0){echo 'checked';} 
	?>
	value=0 />
</div>
<a href="admin.php?page_layout=list-user" class="btn btn-secondary active"
role="button" aria-pressed="true">Quay Lại</a>
<button type="submit" name="submit"  class="btn btn-primary">Cập Nhập</button>

</form>
</div>

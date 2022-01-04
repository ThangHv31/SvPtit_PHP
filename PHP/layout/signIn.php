<?php
session_start();
include_once('connectDb.php');

$error = NULL;
if(isset($_POST['submit'])){
	if($_POST['tk']==""){
		$error = "Vui lòng nhập tài khoản và mật khẩu";
	}else{
		$tk = $_POST['tk'];
	}

	if($_POST['mk']==""){
		$error = "Vui lòng nhập tài khoản và mật khẩu";
	}else{
		$mk = $_POST['mk'];
	}

	if(isset($tk) && isset($mk)){
		$sql = "SELECT * FROM user WHERE email ='$tk' AND password = '$mk' AND status = '0' ";
		$query = mysqli_query($conn, $sql);
		$rows = mysqli_num_rows($query);
		if($rows<=0){
			$error = 'Tài khoản hoặc mật khẩu chưa đúng';
		}elseif ($_SESSION["tk"]=="hoangthang@gmail.com"&&$_SESSION["mk"]=="12456") {
			header('location:admin.php');
		}
		else{
			$_SESSION['tk'] = $tk;
			$_SESSION['mk'] = $mk;
			header('location:index.php');
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8" />
	<title>SVPTIT-Đăng Nhập</title>
	
	<link rel="stylesheet" type="text/css" href="../css/signI.css" />
</head>



<body>
	
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="#">
				<h1>Tạo Tài Khoản Mới</h1>
				<input type="text" placeholder="UserName" />
				<input type="email" placeholder="Email" />
				<input type="password" placeholder="Mật Khẩu" />
				<input type="password" placeholder="Nhập lại mật khẩu" />
				<button>Đăng Kí</button>
			</form>
		</div>
		<?php
	if(!isset($_SESSION['tk'])){


		?>
		<div class="form-container sign-in-container">
			<form method="post" action="#">
				<h1>Đăng Nhập</h1>
				<input type="email" name="tk" placeholder="Email" />
				<input type="password" name="mk" placeholder="Password" />
				<a href="#">Quên Mật Khẩu?</a>
				<button type="submit" name="submit">Đăng Nhập</button>
			</form>
		</div>
		<?php
	}else{
		header('location:admin.php');
	}

	?>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Chào Mừng Bạn!</h1>
					<p>Để theo dõi thông tin một cách thuận tiện, hãy đăng nhập!!!</p>
					<button class="ghost" id="signIn">Đăng Nhập</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Xin chào!</h1>
					<p>Nếu chưa có tài khoản, hãy đăng kí ngay!!!</p>
					<button class="ghost" id="signUp">Đăng Kí</button>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<script type="text/javascript" src="../js/signIn.js"></script>
	</footer>
	
</body>
</html>

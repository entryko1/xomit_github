<!-- Phan dau tien header -->
<?php
	include 'connect_db.php';
	$page = 'login';
	include 'header.php';
?>
<!-- Phan noi dung body -->
<div class="body">
	<form action="" method="_POST">
	<div class="login" align="center">
		<table>
			<tr>
				<th colspan="2"><h2>Đăng nhập</h2></th>
			</tr>
			<tr>
				<td><b>Tài khoản:</b></td>
				<td><input type="text" name="email" style="background-image: url('images/email.png');background-repeat: no-repeat;background-position: 7px 6px;  padding-left: 40px;">
			</td>
			<tr>
				<td><b>Mật khẩu:</b></td>
				<td><input type="password" name="password" style="background-image: url('images/password.png');background-repeat: no-repeat;background-position: 7px 6px;  padding-left: 40px;"></td>
			</tr>
			<tr>
				<td><a href="/">Quên mật khẩu?</a>
				<td><input type="submit" name="login" value="Đăng nhập"></td>
			</tr>
		</table>
	</div>
	</form>
</div>
<div class="clearfix"></div>
<?php
	if(isset($_POST["login"]))
	{
		$email = $_POST["email"];
		$matkhau = $_POST["password"];
		$sql = "SELECT email,matkhau FROM thanhvien WHERE email='$email' AND matkhau='$matkhau'";
		//$rows = mysqli_query($conn,$sql);
		//$count = mysqli_num_rows($rows);
		$_SESSION['logged']='true';
	}
	if(isset($_SESSION['logged']))
	{
		echo'Đã có giá trị';
	}
	else
	{
		echo 'Chưa có giá trị';
	}
?>
<!-- Phan cuoi cung footer -->
<?php
	include 'footer.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Đăng ký thông tin thành viên</title>
<head>
<body>
	<form method="POST" action="xulydk.php">
		<p>User Name:<input type="text" name="username" value="" size="20"> </p>
		<p>Password:<input type="text" name="password" value="" size="20"> </p>
		<p>
			Sex:<select name="selSex">
				<option value="Male">Male</option>
				<option value="Female">Female</option>
			</select>
		</p>
		<p><input type="submit" name="click_reg" value="Đăng ký"></p>
		<p><input type="reset" name="click_reset" value="Reset"></p>
	</form>
<body>
</html>
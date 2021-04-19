<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Đăng ký thông tin khách hàng</title>
<head>
<body>
  <h1 align="center">Đăng ký thông tin khách hàng</h1>
  <div style="margin-left: 200px">
  <form action="insertkhachhang.php" method="POST">

  Mã ID khách hàng:<br /> 
  <input type="text" value="" name="makh" size="30" placeholder="Enter a valid ID"><br /><br />  
  Tên đăng ký:<br /> 
  <input type="text" value="" name="name" size="30" placeholder="Enter a valid name"><br /><br /> 
  Giới tính:<br/>
    <input type="radio" name="sex" value="male" checked="checked">Nam
    <input type="radio" name="sex" value="female">Nữ<br /><br /> 
  Địa chỉ:<br />
    <input type="text" name="address" id="txtaddress" size="50" placeholder="Enter a valid address"><br /><br /> 
  Số điện thoại:<br />
    <input type="text" value="" name="phone" size="30"  
  maxlength="10" placeholder="Enter a valid phone number" pattern="[0-9]{10}"><br /><br />
  Email:<br />
    <input type="email" value="" name="email" size="30"  
  placeholder="Enter a valid email address"><br /><br />
  <input type="submit" name="submitkh" value="Đăng ký">
  <input type="reset" name="cancelkh" value="Cancel">

  </form>
  </div>
<body>
</html>
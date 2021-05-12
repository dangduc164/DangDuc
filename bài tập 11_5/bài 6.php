<!DOCTYPE html>
<html>
<head>
	<title>bài 6</title>
</head>
<body>
	<form method="Post">
		Nhập: <input type="text" name="Number">
		<input type="submit" name="">
		
	</form>
	<?php
	    switch ($_Post['Number']) {
	    	case '0':
	    		echo " Ngày thứ hai";
	    		break;
	    	case '1':
	    		echo " Ngày thứ ba";
	    		break;
	    	case '2':
	    		echo " Ngày thứ tư";
	    		break;
	    	case '3':
	    		echo " Ngày thứ năm";
	    		break;
	    	case '4':
	    		echo " Ngày thứ sáu";
	    		break;
	    	case '5':
	    		echo " Ngày thứ bảy";
	    		break;
	    	case '6':
	    		echo " Ngày Chủ nhật";
	    		break;
	    	default:
	    		echo " chưa có dữ liệu!";
	    		break;
	    }
	?>

</body>
</html>
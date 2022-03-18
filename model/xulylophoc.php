<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/lophoc_view.php">
    <title></title>
</head>

<body>
    <?php
	include_once('../publish/connect.php');
	$lop = $_POST["lop"];
	$makhoa=$_POST['makhoa'];
	//$conn=mysqli_connect('localhost','root','','Qlsinhvien') or die('Không kết nối được DB');
	$sql="INSERT INTO lophoc (lop,makhoa) VALUES('$lop','$makhoa')";
	$kq=mysqli_query($conn,$sql);
	if ($kq) {
		include_once('../controller/add_lophoc.php');
		
	}
?>
</body>

</html>
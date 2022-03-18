<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="refresh" content="0.5 url=http://localhost/dangkyhoc/view/lophoc_view.php">
    <title>Xóa</title>
</head>

<body>
    <?php
	
	include_once("../publish/connect.php");
	$lop=$_GET['lop'];
	$sql="DELETE FROM sinhvien WHERE lop = '$lop'";
	$kq=mysqli_query($conn,$sql);
	$sql="DELETE FROM lophoc WHERE lop = '$lop'";
	$result=mysqli_query($conn,$sql);
	if ($result) {
		header("http://localhost/dangkyhoc/view/lophoc_view.php");
	}
	// header("http://localhost/dangkyhoc/view/quanlysinhvien.php");

	?>
</body>

</html>
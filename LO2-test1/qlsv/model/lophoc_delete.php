<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="refresh" content="0.5 url=http://localhost/qlsv/View/lophoc_list_view.php" >
	<title></title>
</head>
<body>
	<?php 
	include_once('../Publish/connect.php');
	$malop = $_GET['malop'];
	$sql="Delete From lophoc where malop = '$malop'";
				$kq=mysqli_query($conn,$sql);
				if ($kq) {
					header("http://localhost/qlsv/View/lophoc_list_view.php");
				}
	 ?>
</body>
</html>
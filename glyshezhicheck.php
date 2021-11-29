<?php

$glyusername=$_REQUEST["glyusername"];
	
	$newmm = $_POST['newmm'];
	include("connect.php");

	$result = mysqli_query($con,"update admin set glypwd='$newmm' where glyusername='$glyusername'");// die  
	// if (!$result) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();
	
	//数据库报错
	


	if($result){
	
		echo "<script language='javascript'>alert('修改成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshouye.php?glyusername=$glyusername">
EOT;
	}else{
		echo "<script language='javascript'>alert('修改失败！ 请重新修改!');</script>";
		print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshezhi.php?glyusername=$glyusername">
EOT;
	}

?>

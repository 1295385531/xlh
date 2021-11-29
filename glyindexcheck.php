<?php
	$glyusername = $_POST['glyuser'];
	$glypwd = $_POST['glypwd'];
	include("connect.php");

	$result = mysqli_query($con,"select * from admin where glyusername = '$glyusername' and glypwd ='$glypwd'");// die  
	// if (!$result) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();
	
	//数据库报错
	$row = mysqli_fetch_array($result);


	if($row['glyusername']==$glyusername&& $row['glypwd']==$glypwd){
	
		echo "<script language='javascript'>alert('登入成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshouye.php?glyusername=$glyusername">
EOT;
		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('登入失败！请重新登入！');</script>";
		echo '<meta http-equiv="refresh"content="1;url=index.php">';//页面跳转
	}

?>

<?php
		$glyusername = $_POST['glyuser'];
        $glypwd = $_POST['glypwd'];
		$glyxingming = $_POST['glyxingming'];
        include("connect.php");

	$zhuceresult = mysqli_query($con,"insert into admin(glyusername,glypwd,glyxingming) values('$glyusername','$glypwd','$glyxingming')");

	// if (!$result) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();
	//数据库报错
	if($zhuceresult){
		 echo "<script language='javascript'>alert('注册成功！请前往登入！');</script>";
		 echo '<meta http-equiv="refresh"content="1;url=index.php">';//页面跳转
		}else{
			echo "<script language='javascript'>alert('注册失败！请重新注册！');</script>";
			echo '<meta http-equiv="refresh"content="1;url=glyzhuce.php">';//页面跳转
		}
	
	
?>

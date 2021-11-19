<?php

        $xuehao = $_POST['xuehao'];
		$stuuser = $_POST['stuuser'];
        $stupwd = $_POST['stupwd'];
        include("connect.php");

	$zhuceresult = mysqli_query($con,"insert into studentuser(xuehao,stuuser,stupwd) values('$xuehao','$stuuser','$stupwd')");

	// if (!$result) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();
	//数据库报错
	if($zhuceresult){
		 echo "<script language='javascript'>alert('注册成功！请前往登入！');</script>";
		 echo '<meta http-equiv="refresh"content="1;url=index.php">';//页面跳转
		}else{
			echo "<script language='javascript'>alert('注册失败！请重新注册！');</script>";
			echo '<meta http-equiv="refresh"content="1;url=stuzhuce.php">';//页面跳转
		}
	
	
?>

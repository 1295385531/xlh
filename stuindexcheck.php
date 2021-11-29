<?php
	$stuuser = $_POST['stuuser'];
	$stupwd = $_POST['stupwd'];
	include("connect.php");

	$result = mysqli_query($con,"select * from studentuser where stuuser = '$stuuser' and stupwd ='$stupwd'");// die  
	// if (!$result) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();
	
	//数据库报错
	$row = mysqli_fetch_array($result);

	
	$rs=mysqli_query($con,"select * from student");
	$s=mysqli_fetch_row($rs);
    $xuehao=$s[0];


	if($row['stuuser']==$stuuser&& $row['stupwd']==$stupwd){

		echo "<script language='javascript'>alert('登入成功！');</script>";
		print <<<EOT
		<meta http-equiv="refresh"content="1;url=stushouye.php?xuehao=$xuehao">
EOT;
		//header("location:stushouye.php?stuuser={$stuuser}");
	
	}else{
		echo "<script language='javascript'>alert('登入失败！请重新登入！');</script>";
		echo '<meta http-equiv="refresh"content="1;url=index.php">';//页面跳转
	}
?>

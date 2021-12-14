<?php
		$xuehao= $_POST['xuehao'];
        $stuname = $_POST['stuname'];
        $stuxb = $_POST['stuxb'];
        $stubirth = $_POST['stubirth'];
        $stuphone = $_POST['stuphone'];
        $department = $_POST['department'];
        $professional = $_POST['professional'];
    
		$glyusername = $_REQUEST['glyusername'];
        include("connect.php");

	$add =@mysqli_query($con,"insert into student(xuehao,stuname,stuxb,stubirth,stuphone,department,professional) values('$xuehao','$stuname','$stuxb','$stubirth','$stuphone','$department','$professional')");

	// if (!$add) {  
	// 	printf("Error: %s\n", mysqli_error($con));
	// 	exit();}
	

	if($add){
	
		echo "<script language='javascript'>alert('成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyaddstudent.php?glyusername=$glyusername">
EOT;
	}else{
		echo "<script language='javascript'>alert('失败！');</script>";
		print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyaddstudent.php?glyusername=$glyusername">
EOT;
	}

	
	
?>
<?php
$delectstu=$_REQUEST["delectstu"];
$glyusername=$_REQUEST["glyusername"];
//echo $delectstu;
include("connect.php");

$sql1="DELETE FROM `student` WHERE xuehao=$delectstu";
	$rs = mysqli_query($con,$sql1);
	//    if (!$rs) {  
	//   printf("Error: %s\n", mysqli_error($con));
    //       exit();
    //    }
	if($rs){
		echo "<script language='javascript'>alert('删除成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glystudentmanage.php?glyusername=$glyusername">
EOT;
		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('删除失败！！');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=glystudentmanage.php?glyusername=$glyusername">
EOT;
	}


?>
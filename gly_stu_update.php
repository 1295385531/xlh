<?php
$xuehao= $_POST['xuehao'];
$stuname = $_POST['stuname'];
$stuxb = $_POST['stuxb'];
$stubirth = $_POST['stubirth'];
$stuphone = $_POST['stuphone'];
$department = $_POST['department'];
$professional = $_POST['professional'];

$glyusername = $_REQUEST['glyusername'];

// echo $xuehao;
// echo $stuphone;
include("connect.php");

$sql1="UPDATE student SET stuname='$stuname',stuxb='$stuxb',stubirth='$stubirth',stuphone='$stuphone',department='$department',professional='$professional' where xuehao='$xuehao'";
//$sql1="delete shenqingbiao where shijian='$shijian'";

$rs = mysqli_query($con,$sql1);
  //  $rs2 = mysqli_query($con,$sql2);
	//   if (!$rs) {  
	//  printf("Error: %s\n", mysqli_error($con));
    //      exit();
    //     }
	if($rs){
		echo "<script language='javascript'>alert('修改成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glystudentmanage.php?glyusername=$glyusername">
EOT;

//带不带数据其实都一样 $stuname

		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('修改失败！！');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=glystudentmanage.php?glyusername=$glyusername">
EOT;
	}




?>
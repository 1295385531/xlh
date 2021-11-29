<?php
$xuehao=$_REQUEST["xuehao"];
$stuname=$_REQUEST["stuname"];//
$destination=$_REQUEST["destination"];
$transportation=$_REQUEST["transportation"];
$begindate=$_REQUEST["begindate"];
$enddate=$_REQUEST["enddate"];
$reason=$_REQUEST["reason"];
$shijian=$_REQUEST["shijian"];

$glyusername=$_REQUEST["glyusername"];
// echo  $glyusername;
// echo  $xuehao;
// echo  $stuname;
// echo $destination;
// echo $transportation;
// echo $begindate;
// echo $enddate;
// echo $reason;
include("connect.php");

$sql1="update shenqingbiao set zhuangtai='审批通过' where xuehao='$xuehao' and stuname='$stuname' and destination='$destination' and transportation='$transportation' and begindate='$begindate' and enddate='$enddate' and reason='$reason' and shijian='$shijian'";
//$sql1="update shenqingbiao set zhuangtai=1 where stuname='$stuname'";

	$rs = mysqli_query($con,$sql1);
    
	//   if (!$rs) {  
	//  printf("Error: %s\n", mysqli_error($con));
    //      exit();
    //     }
	if($rs){
		echo "<script language='javascript'>alert('同意成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshenqing.php?glyusername=$glyusername&stuname=$stuname">
EOT;

//带不带数据其实都一样

		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('失败！！');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshenqing.php?glyusername=$glyusername&stuname=$stuname">
EOT;
	}




?>
<?php
$xuehao=$_REQUEST["xuehao"];
$stuname=$_REQUEST["stuname"];//
$destination=$_REQUEST["destination"];
$transportation=$_REQUEST["transportation"];
$begindate=$_REQUEST["begindate"];
$enddate=$_REQUEST["enddate"];
$reason=$_REQUEST["reason"];
$zhuangtai=$_REQUEST["zhuangtai"];
$jujue=$_REQUEST["jujue"];
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
// echo $zhuangtai;
// echo $jujue;
// echo $shijian;
include("connect.php");

$sql1="update shenqingbiao set zhuangtai='' where xuehao='$xuehao' and stuname='$stuname' and destination='$destination' and transportation='$transportation' and begindate='$begindate' and enddate='$enddate' and reason='$reason' and zhuangtai='$zhuangtai' and jujue='$jujue' and shijian='$shijian' ";
//$sql1="update shenqingbiao set zhuangtai=1 where stuname='$stuname'";

$sql2="update shenqingbiao set jujue='' where xuehao='$xuehao' and stuname='$stuname' and destination='$destination' and transportation='$transportation' and begindate='$begindate' and enddate='$enddate' and reason='$reason' and shijian='$shijian' ";

	$rs = mysqli_query($con,$sql1);
    $rs2 = mysqli_query($con,$sql2);
	//   if (!$rs) {  
	//  printf("Error: %s\n", mysqli_error($con));
    //      exit();
    //     }
	if($rs&&$rs2){
		echo "<script language='javascript'>alert('撤销成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=allshenqing.php?glyusername=$glyusername&stuname=$stuname">
EOT;

//带不带数据其实都一样 $stuname

		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('失败！！');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=allshenqing.php?glyusername=$glyusername&stuname=$stuname">
EOT;
	}




?>
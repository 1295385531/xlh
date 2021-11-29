
<?php
	$xuehaos = $_POST['xuehaos'];
    $stuname = $_POST['stuname'];
    $destination= $_POST['destination'];
    $transportation = $_POST['transportation'];
    $begindate= $_POST['begindate'];
    $enddate = $_POST['enddate'];
    $reason = $_POST['reason'];
    $glyxingming = $_POST['glyxingming'];
	include("connect.php");

    $xuehao=$_REQUEST["xuehao"];
    $now=time();
    $date=date('Y-m-t h:m:s',$now);


	$zhuceresult = mysqli_query($con,"insert into shenqingbiao(xuehao,stuname,destination,transportation,begindate,enddate,reason,glyxingming,zhuangtai,jujue,shijian) values('$xuehaos','$stuname','$destination','$transportation','$begindate','$enddate','$reason','$glyxingming','','','$date')");


	if($zhuceresult){
	
        echo "<script language='javascript'>alert('申请成功！请等待管理员审批');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=stushenqing.php?xuehao=$xuehao">
EOT;
	
	}else{
        echo "<script language='javascript'>alert('申请失败！请重新申请！');</script>";
        print <<<EOT
        <meta http-equiv="refresh"content="1;url=stushenqing.php?xuehao=$xuehao">
EOT;
	}

?>

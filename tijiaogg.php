<?php
	$gg= $_POST['gg'];
    $glyusername=$_REQUEST["glyusername"];
    include("connect.php");

	$fabu= mysqli_query($con,"UPDATE `gonggao` SET `gg`='$gg' WHERE id=1");


	if($fabu){
	
		echo "<script language='javascript'>alert('发布成功！');</script>";
print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyshouye.php?glyusername=$glyusername">
EOT;
		//header("location:glyshouye.php?glyusername={$glyusername}");// 参数跳转 
	
	}else{
		echo "<script language='javascript'>alert('发布失败，请重新发布！');</script>";
        print <<<EOT
		<meta http-equiv="refresh"content="1;url=glyfabugg.php?glyusername=$glyusername">
EOT;
	}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理员设置</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/inner.css">
<!--    <link rel="stylesheet" href="iconfont.css">-->
    <link rel="shortcut icon" href="../static/img/bitbug_favicon.ico">
</head>
<body>
<?php
$glyusername=$_REQUEST["glyusername"];
?>
	 <header class="header">
        <i>高</i>
        <i>校</i>
        <i>疫</i>
        <i>情</i>
        <i>外</i>
        <i>出</i>
        <i>申</i>
		<i>请</i>
		<i>系</i>
		<i>统</i>
		<i>管</i>
		<i>理</i>
		<i>端</i>
		
        <button><a href="index.php" class="dengchu">登出</a></button>
    </header>
    <div class="main">

		 <div class="left">
            <div class="title">菜 单</div>
            <ul>
            <li><a href="glyshouye.php?glyusername=<?php echo $glyusername ?>" class="icon-1"><span>首页</span></a></li>
                <li><a href="glystudentmanage.php?glyusername=<?php echo $glyusername ?>" class="icon-2"><span>学生管理</span></a></li>
                <li><a href="glyshenqing.php?glyusername=<?php echo $glyusername ?>" class="icon-3"><span>申请管理</span></a></li>
                <li><a href="allshenqing.php?glyusername=<?php echo $glyusername ?>" class="icon-4"><span>申请记录</span></a></li>
                <li><a href="/bookmanagement/department/findAllDepartment" class="icon-6"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/admin/findAllStudentFineInfo" class="icon-7"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/adminpage/givenotice.jsp"  class="icon-8"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/admin/toUserFeedbackPage" class="icon-9"><span>xxxx</span></a></li>
                <li><a href="glyshezhi.php?glyusername=<?php echo $glyusername ?>" class="icon-10"><span>设置</span></a></li>
            </ul>
        </div>      
        <div class="right">
        
        <!-- <a class="btn-add" href="/bookmanagement/book/toAddBookPage">添加</a> -->
        <form action="glyshezhicheck.php?glyusername=<?php echo $glyusername; ?>" class="form" method="POST">
	
    <div>
        密码
        <input type="password"  class="form-input" name="newmm" required="required" placeholder="请输入您要修改的密码"/>
    </div>
    <div>
    <input type="submit" class="btn" value="确认">
    </div>

</form>
   </div>
    </div>
</body>
</html>
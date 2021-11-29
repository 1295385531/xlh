
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>学生设置</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/inner.css">
<!--    <link rel="stylesheet" href="iconfont.css">-->
    <link rel="shortcut icon" href="../static/img/bitbug_favicon.ico">
</head>
<body>
<?php
$xuehao=$_REQUEST["xuehao"];
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
		<i>学</i>
		<i>生</i>
		<i>端</i>
		
        <button><a href="index.php" class="dengchu">登出</a></button>
    </header>
    <div class="main">

		 <div class="left">
            <div class="title">菜 单</div>
            <ul>
                <li><a href="stushouye.php?xuehao=<?php echo $xuehao; ?>" class="icon-1"><span>首页</span></a></li>
                <li><a href="stushenqing.php?xuehao=<?php echo $xuehao; ?>" class="icon-2"><span>外出申请</span></a></li>
                <li><a href="stuspjilu.php?xuehao=<?php echo $xuehao; ?>" class="icon-3"><span>审批记录</span></a></li>
                <li><a href="/bookmanagement/bookshelf/findAllBookshelf" class="icon-4"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/major/findAllMajor" class="icon-5"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/department/findAllDepartment" class="icon-6"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/admin/findAllStudentFineInfo" class="icon-7"><span>xxxxx</span></a></li>
                <li><a href="/bookmanagement/adminpage/givenotice.jsp"  class="icon-8"><span>xxxx</span></a></li>
                <li><a href="/bookmanagement/admin/toUserFeedbackPage" class="icon-9"><span>xxxx</span></a></li>
                <li><a href="stushezhi.php?xuehao=<?php echo $xuehao; ?>" class="icon-10"><span>设置</span></a></li>
            </ul>
        </div>      
        <div class="right">
        
        <!-- <a class="btn-add" href="/bookmanagement/book/toAddBookPage">添加</a> -->
        <form action="stushezhicheck.php?xuehao=<?php echo $xuehao; ?>" class="form" method="POST">
	
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
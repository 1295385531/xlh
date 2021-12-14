
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理端增加学生</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/inner.css">
<!--    <link rel="stylesheet" href="iconfont.css">-->
    <link rel="shortcut icon" href="../static/img/bitbug_favicon.ico">

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
$glyusername=$_REQUEST["glyusername"];// ycz
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
                <li><a href="glyfabugg.php?glyusername=<?php echo $glyusername ?>" class="icon-6"><span>发布公告</span></a></li>
                <li><a href="glyaddstudent.php?glyusername=<?php echo $glyusername ?>" class="icon-7"><span>增加学生</span></a></li>
    
                <li><a href="glyshezhi.php?glyusername=<?php echo $glyusername ?>" class="icon-10"><span>设置</span></a></li>
            </ul>
        </div>      
      


        <h1 style="text-align: center"><strong>增加学生</strong></h1>
<div style="padding: 10px 500px 10px;">
    <form  action="gly_stu_add.php?glyusername=<?php echo $glyusername ?>" method="POST" style="text-align: center" class="bs-example bs-example-form" role="form">
        <div id="login">
        <div class="input-group"><span class="input-group-addon">学号</span><input name="xuehao" type="text" placeholder="请输入学号" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">姓名</span><input name="stuname" type="text" placeholder="请输入姓名" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">性别</span><input name="stuxb" type="text" placeholder="请输入性别" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">出生年月</span><input name="stubirth" type="text" placeholder="请输入出生年月" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">手机号</span><input name="stuphone" type="text" placeholder="请输入手机号" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">院系</span><input name="department" type="text" placeholder="请输入院系" class="form-control"></div><br/>
            <div class="input-group"><span class="input-group-addon">专业</span><input name="professional" type="text" placeholder="请输入专业" class="form-control"></div><br/>
           <label><input type="submit" value="添加" class="btn"></label>
            <label><input type="reset" value="重置" class="btn"></label>
        </div>
    </form>
</div>



    </div>
</body>
</html>
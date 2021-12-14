
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理端首页</title>
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
                <li><a href="glyfabugg.php?glyusername=<?php echo $glyusername ?>" class="icon-6"><span>发布公告</span></a></li>
                <li><a href="glyaddstudent.php?glyusername=<?php echo $glyusername ?>" class="icon-7"><span>增加学生</span></a></li>
                
                <li><a href="glyshezhi.php?glyusername=<?php echo $glyusername ?>" class="icon-10"><span>设置</span></a></li>
            </ul>
        </div>      
        <div class="right bg">
        
         	<p>亲爱的<?php echo $glyusername;  ?>，欢迎来到高校疫情外出管理系统界面--管理端</p>
         	<p>在这里您可以对学生，账号，申请，院系进行相应的增删查改操作</p>
         	<p>若对某个用户迟迟不还歀而困扰，您可以点击催促按钮来给他发送一封催款邮件</p>
         	<p>您可以下达通知，下达的通知有字数限制，在255字之内，所有用户的邮箱都会接收到此通知</p>
         	<p>您可以点击用户反馈来查看该系统所有用户的反馈信息</p>

        </div>
    </div>
</body>
</html>
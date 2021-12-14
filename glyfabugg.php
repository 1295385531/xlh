
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理端发布公告</title>
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

        <div class="fineright">
        
        <div class="message">
            <form  action="tijiaogg.php?glyusername=<?php echo $glyusername ?>" method="POST">
           <textarea  rows="13" cols="54" name="gg" ></textarea>
         
           
        </div>
        <input type="submit" class="btn-report" value="发布">
      
        </form>
    </div>
</body>
</html>
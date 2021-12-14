<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>学生公告</title>
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/inner.css">
    <!--    <link rel="stylesheet" href="iconfont.css">-->
    <link rel="shortcut icon" href="../static/img/bitbug_favicon.ico">
</head>

<body>
    <?php
    $xuehao = $_REQUEST["xuehao"];
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
                <li><a href="stugonggao.php?xuehao=<?php echo $xuehao; ?>" class="icon-4"><span>公告</span></a></li>
                <li><a href="stuxiugai.php?xuehao=<?php echo $xuehao; ?>" class="icon-5"><span>修改个人信息</span></a></li>

                <li><a href="stushezhi.php?xuehao=<?php echo $xuehao; ?>" class="icon-10"><span>设置</span></a></li>
            </ul>
        </div>
        <div class="right bg">

            <p align="center" class="gonggao">公告</p>
            <p>
                <?Php
                include("connect.php");
                $sql1 = "select * from gonggao";
                $rs = mysqli_query($con, $sql1);
                while ($s = mysqli_fetch_row($rs)) {

                    echo   $s[1];
                }
                ?>
            </p>
        </div>
    </div>
</body>

</html>
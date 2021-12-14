<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>学生端审批记录</title>
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
        <div class="right">

            <table class="table">
                <thead>
                    <tr>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>目的地</th>
                        <th>交通工具</th>
                        <th>开始时间</th>
                        <th>结束时间</th>
                        <th>申请理由</th>
                        <th>状态</th>
                        <th>拒绝原因</th>
                        <th>申请时间</th>

                    </tr>
                </thead>
                <tbody>

                    <?php

                    include("connect.php");
                    $sql1 = "select * from shenqingbiao where xuehao='$xuehao'ORDER BY `shenqingbiao`.`shijian` DESC;";
                    $rs = mysqli_query($con, $sql1);



                    while ($s = mysqli_fetch_row($rs)) {
                        print <<<EOT
    <tr>
    <td>$s[0]  </td>
	<td>$s[1]  </td>
	<td>$s[2]  </td>
	<td>$s[3]  </td>
	<td>$s[4]  </td>
	<td>$s[5]  </td>
    <td>$s[6]  </td>
    <td>$s[8]  </td>
    <td>$s[9]  </td>
    <td>$s[10]  </td>
    </tr>

EOT;
                    }

                    ?>
                </tbody>
            </table>

        </div>

    </div>

</body>

</html>
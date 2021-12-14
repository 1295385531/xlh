<?php
$xuehao = $_REQUEST['xuehao'];

include("connect.php");
$sql1 = "select * from student where xuehao='$xuehao'";
$rs = mysqli_query($con, $sql1);
while ($s = mysqli_fetch_row($rs)) {
    $stuname = $s[1];
    $stuxb = $s[2];
    $stubirth = $s[3];
    $stuphone = $s[4];
    $department = $s[5];
    $professional = $s[6];
}
?>

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



        <h1 style="text-align: center"><strong>修改信息</strong></h1>
        <div style="padding: 10px 500px 10px;">
            <form action="stu_update.php?xuehao=<?php echo $xuehao ?>" method="POST" style="text-align: center" class="bs-example bs-example-form" role="form">
                <div id="login">
                    <div class="input-group"><span class="input-group-addon">学号</span><input name="xuehao" type="text" placeholder="请输入学号" class="form-control" readonly="readonly" value="<?php echo $xuehao; ?>"></div><br />
                    <div class="input-group"><span class="input-group-addon">姓名</span><input name="stuname" type="text" placeholder="请输入姓名" class="form-control" value="<?php echo $stuname; ?>"></div><br />
                    <div class="input-group"><span class="input-group-addon">性别</span><input name="stuxb" type="text" placeholder="请输入性别" class="form-control" value="<?php echo $stuxb; ?>"></div><br />
                    <div class="input-group"><span class="input-group-addon">出生年月</span><input name="stubirth" type="text" placeholder="请输入出生年月" class="form-control" value="<?php echo $stubirth; ?>"></div><br />
                    <div class="input-group"><span class="input-group-addon">手机号</span><input name="stuphone" type="text" placeholder="请输入手机号" class="form-control" value="<?php echo $stuphone; ?>"></div><br />
                    <div class="input-group"><span class="input-group-addon">院系</span><input name="department" type="text" placeholder="请输入院系" class="form-control" value="<?php echo $department; ?>"> </div><br />
                    <div class="input-group"><span class="input-group-addon">专业</span><input name="professional" type="text" placeholder="请输入专业" class="form-control" value="<?php echo $professional; ?>"></div><br />
                    <label><input type="submit" value="修改" class="btn"></label>
                    <label><input type="reset" value="重置" class="btn"></label>
                </div>
            </form>
        </div>



    </div>
</body>

</html>
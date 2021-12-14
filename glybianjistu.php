<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>编辑学生</title>
</head>
<body>
<?php
//glyusername=$glyusername&xuehao=$s[0]&stuname=$s[1]&stuxb=$s[2]&stuphone=$s[4]&stubirth=$s[3]&department=$s[5]&professional=$s[6]
$xuehao=$_REQUEST['xuehao'];
$stuname=$_REQUEST['stuname'];
$stuxb=$_REQUEST['stuxb'];
$stubirth=$_REQUEST['stubirth'];
$stuphone=$_REQUEST['stuphone'];
$department=$_REQUEST['department'];
$professional=$_REQUEST['professional'];
$glyusername=$_REQUEST["glyusername"];
?>




<h1 style="text-align: center"><strong>编辑学生</strong></h1>
<div style="padding: 10px 500px 10px;">
    <form  action="gly_stu_update.php?glyusername=<?php echo $glyusername ?>" method="POST" style="text-align: center" class="bs-example bs-example-form" role="form">
        <div id="login">
            <div class="input-group"><span class="input-group-addon">学号</span><input name="xuehao" type="text" placeholder="请输入学号" class="form-control"  readonly="readonly" value="<?php echo $xuehao; ?>"></div><br/>
            <div class="input-group"><span class="input-group-addon">姓名</span><input name="stuname" type="text" placeholder="请输入姓名" class="form-control"  value="<?php echo $stuname; ?>"></div><br/>
            <div class="input-group"><span class="input-group-addon">性别</span><input name="stuxb" type="text" placeholder="请输入性别" class="form-control"  value="<?php echo $stuxb; ?>"></div><br/>
            <div class="input-group"><span class="input-group-addon">出生年月</span><input name="stubirth" type="text" placeholder="请输入出生年月" class="form-control"  value="<?php echo $stubirth; ?>"></div><br/>
            <div class="input-group"><span class="input-group-addon">手机号</span><input name="stuphone" type="text" placeholder="请输入手机号" class="form-control"  value="<?php echo $stuphone; ?>"></div><br/>
            <div class="input-group"><span class="input-group-addon">院系</span><input name="department" type="text" placeholder="请输入院系" class="form-control"  value="<?php echo $department; ?>"> </div><br/>
            <div class="input-group"><span class="input-group-addon">专业</span><input name="professional" type="text" placeholder="请输入专业" class="form-control"  value="<?php echo $professional; ?>"></div><br/>
            <label><input type="submit" value="修改" class="btn btn-default"></label>
            <label><input type="reset" value="重置" class="btn btn-default"></label>
        </div>
    </form>
</div>

</body>
</html>

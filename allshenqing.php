<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>申请记录</title>
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
                        <th>操作</th>
                      
                    </tr>
                </thead>
                <tbody>
                
    <?php

include("connect.php");
$sql1="select * from shenqingbiao ORDER BY `shenqingbiao`.`shijian` DESC";
$rs=mysqli_query($con,$sql1);
while ($s=mysqli_fetch_row($rs)){
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
	<td>
  
    <a class='btn' href='cexiao.php?xuehao=$s[0]&stuname=$s[1]&destination=$s[2]&transportation=$s[3]&begindate=$s[4]&enddate=$s[5]&reason=$s[6]&zhuangtai=$s[8]&jujue=$s[9]&shijian=$s[10]&glyusername=$glyusername'>撤销</a>
    <a class='btn' href='delete.php?xuehao=$s[0]&stuname=$s[1]&destination=$s[2]&transportation=$s[3]&begindate=$s[4]&enddate=$s[5]&reason=$s[6]&zhuangtai=$s[8]&jujue=$s[9]&shijian=$s[10]&glyusername=$glyusername'>删除</a>

    </td>

    </tr>

EOT;




}
//echo $glyusername;
?>    			 
                </tbody>
            </table>
            
        </div>
        
    </div>

</body>
</html>
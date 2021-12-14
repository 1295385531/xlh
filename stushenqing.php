<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>外出申请</title>
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

            <!-- <a class="btn-add" href="/bookmanagement/book/toAddBookPage">添加</a> -->
            <form action="stushenqingcheck.php?xuehao=<?php echo $xuehao; ?>" class="form" method="POST">

                <div>
                    学号
                    <input type="text" class="form-input" name="xuehaos" required="required" placeholder="xxx" />
                </div>
                <div>
                    姓名
                    <input type="text" class="form-input" name="stuname" required="required" placeholder="xxx" />
                </div>
                <div>
                    目的地
                    <input type="text" class="form-input" name="destination" required="required" placeholder="xxx" />
                </div>
                <div>
                    交通工具
                    <input type="text" class="form-input" name="transportation" required="required" placeholder="xxx" />
                </div>
                <div>
                    开始时间
                    <input type="text" class="form-input" name="begindate" required="required" placeholder="xxxx-xx-xx" />
                </div>
                <div>
                    结束时间
                    <input type="text" class="form-input" name="enddate" required="required" placeholder="xxxx-xx-xx" />
                </div>
                <div>
                    申请理由
                    <input type="text" class="form-input" name="reason" required="required" placeholder="xxx" />
                </div>
                <div>
                    审批人
                    <input type="text" class="form-input" name="glyxingming" required="required" placeholder="xxx" />
                </div>
                <!-- <div>
        书架
          <select name="shelf" class="form-input">
            <c:forEach items="${allBookshelf}" var="bookshelf">
                <option value="${bookshelf.no}" ${book.shelf == bookshelf.no ?  "selected" :""}>${bookshelf.no}</option>
            </c:forEach>
        </select>
    </div> -->
                <div>
                    <input type="submit" class="btn" value="提交">
                </div>

            </form>











        </div>
    </div>
</body>

</html>
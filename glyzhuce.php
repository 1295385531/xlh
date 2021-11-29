<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理员注册</title>
    <script src="js/inedx.js" async></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>

        <div class="container right-panel-active">
            <form action="glyzhucecheck.php" class="form" method="POST">
                <h2 class="form__title">管理员注册</h2>
                <input type="text" placeholder="User" class="input"  name="glyuser"/>
                <input type="password" placeholder="Password" class="input"  name="glypwd"/>
                <input type="text" placeholder="姓名" class="input"  name="glyxingming"/>
                <input type="submit" class="btn" value="注 册">
                <input class="btn" type="button" value="返 回" onclick="window.location.href='index.php'"/>
            </form>
        </div> 
    

        <div class="container__overlay">
          
        </div>
    </div>
</body>
</html>
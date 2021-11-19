<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>高校疫情防控外出申请系统-登入</title>
    <script src="js/inedx.js" async></script>
	<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
    <div class="container right-panel-active">
        <!-- 学生登入-->
        <div class="container__form container--signup">
            <!-- <form action="#" class="form" id="form1" method="POST"> -->
            <form action="#" class="form"  method="POST">
                <h2 class="form__title">学生登入</h2>
                <input type="text" placeholder="User" class="input" name="stuuser"/>
                <input type="password" placeholder="Password" class="input" name="stupwd" />
                <input type="submit" class="btn" value="登入"/>
                <p></p>
                <a href="stuzhuce.php"><input class="btn" type="button" value="注册" /></a>
            </form>
        </div>
    

        <!-- 管理员登入-->
        <div class="container__form container--signin">
            <!-- <form action="glyindexcheck.php" class="form" id="form2" method="POST"> -->
            <form action="glyindexcheck.php" class="form"  method="POST">
                <h2 class="form__title">管理员登入</h2>
                <input type="text" placeholder="User" class="input" name="glyuser" />
                <input type="password" placeholder="Password" class="input" name="glypwd" />
                <input type="submit" class="btn" value="登入"/>
                <p></p>
                <a href="glyzhuce.php"><input class="btn" type="button" value="注册" /></a>
            </form>
        </div>
    
        <!-- Overlay -->
        <div class="container__overlay">
            <div class="overlay">
                <div class="overlay__panel overlay--left">
                    <button class="btn" id="signIn">管理员登入</button>
                </div>
                <div class="overlay__panel overlay--right">
                    <button class="btn" id="signUp">学生登入</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
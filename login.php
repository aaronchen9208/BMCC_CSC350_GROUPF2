<html>

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <style>
        body {
            background-color: #303641;
        }
    </style>
</head>

<body>
    <div id="container-login">
        <div id="title">
            Login
        </div>

        <form action="validate_account.php" method="post">
            <div class="input">
                <div class="input-addon">
                   
                </div>
                <input id="username" name="username" placeholder="Username" type="text" required class="validate" autocomplete="off">
            </div>

            <div class="clearfix"></div>

            <div class="input">
                <div class="input-addon">
                  
                </div>
                <input id="password" name="password" placeholder="Password" type="password" required class="validate" autocomplete="off">
            </div>

			<br><br>
            <input type="submit" name="submit" value="Log In" />
        </form>
		<br>
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
    </div>
</body>

</html>

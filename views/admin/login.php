<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="resources/css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="loginbox">
        <img src="resources/images/user.png" class="avatar">
        <h1>Login Here</h1>
        <form method="POST">
            <input type="hidden" name="controller" value="user">
            <input type="hidden" name="action" value="authentication">

            <p>Username</p>
            <input type="text" name="username" placeholder="Username" required autofocus>
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
            <div>
                <i><b><?php echo $error ?></b></i><br><br>
            </div>
            <input type="submit" name="submit" value="Login">
            
        </form>


    </div>

</body>
</html>
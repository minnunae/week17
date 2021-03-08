<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <link rel = "stylesheet" href="register.css">
    </head>
    <body>
        <div class="from">
            <h1>เข้าสู่ระบบ</h1>
            <form action="checkuser.php" method="post">
                <input type="text" name="username" placeholder="Username">
                <input type="text" name="password" placeholder="Password">
                <input type="submit" value="Login">
            </form>
            <p>ยังไม่ได้สมัครสมาชิก<a hraf = "register.php">สมัครสมาชิก</a></p>
        </div>
    </body>
</html>
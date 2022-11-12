<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title"><span>Login Form</span></div>
            <form action="#">
                <div class="row">
                    <i class="bx bxs-user"></i>
                    <input type="text" placeholder="Email or Phone" required>
                </div>
                <div class="row">
                    <i class="bx bxs-lock"></i>
                    <input type="password" placeholder="Password" required>
                </div>
                <div class="pass"><a href="#">Forgot password?</a></div>
                <div class="row button">
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">Not a member? <a href="#">Signup now</a></div>
            </form>
        </div>
    </div>

</body>

</html>
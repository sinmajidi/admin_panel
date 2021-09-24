<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="register_style.css">
</head>
<body>

<form action="signup.php" method="post">
  <div class="container">
    <h1>ثبت نام</h1>
  
    <hr>
    <label for="username"><b>نام کاربری</b></label>
    <input type="text" placeholder="نام کاربری" name="username" id="username" required>

    <label for="email"><b>ایمیل</b></label>
    <input type="text" placeholder="ایمیل" name="email" id="email" required>

    <label for="psw"><b> رمز ورود</b></label>
    <input type="password" placeholder="رمز ورود" name="psw" id="psw" required>

    <label for="psw-repeat"><b>تکرار رمز ورود</b></label>
    <input type="password" placeholder=" تکرار رمز ورود" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>برای عضویت قوانین را مطالعه کنید <a href="#">قوانین</a>.</p>

    <button type="submit" class="registerbtn">ثبت نام</button>
  </div>
  
  <div class="container signin">
    <p>آیا ثبت نام کرده اید؟ <a href="login.php"> ورود</a>.</p>
  </div>
</form>

</body>
</html>

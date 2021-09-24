<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="login_style.css">
</head>
<body>

<form action="validate.php" method="post">
  <div class="container">
    <h1>ورود</h1>
  
    <hr>

    <label for="email"><b>ایمیل</b></label>
    <input type="text" placeholder="ایمیل" name="email" id="email" required>

    <label for="psw"><b> رمز ورود</b></label>
    <input type="password" placeholder="رمز ورود" name="psw" id="psw" required>

    
    <hr>
    

    <button type="submit" class="registerbtn">ورود </button>
  </div>
  
 
</form>

</body>
</html>

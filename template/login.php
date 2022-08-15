
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link rel="stylesheet" href='./template/assets/css/loginstyle.css'>
  <link rel="stylesheet" href='./template/assets/css/bootstrap.min.css'>
</head>
<body> 
  <form action="./login/dologin" method="post">
  <div class="login-wrap">
    <div class="login-html">
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <div class="sign-in-htm">
        <div class="group">
          <label for="user" class="label">Username</label>
          <input name="username"id="user" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input name="pass"id="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <input id="check" type="checkbox" class="check" checked>
          <label for="check"><span class="icon"></span> Keep me Signed in</label>
        </div>
        <div class="group">
          <input name="singinb" type="submit" class="button" value="Sign In">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <a href="#forgot">Forgot Password?</a>
        </div>
      </div>
  </form>
  <form method="post"action="./signup">
      <div class="sign-up-htm">
        <div class="group">
          <label for="first" class="label">First Name</label>
          <input id="first" name="first" type="text" class="input">
        </div>
        <div class="group">
          <label for="last" class="label">Last Name</label>
          <input id="last"name="last" type="text" class="input">
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="pass"name="pass" type="password" class="input" data-type="password">
        </div>
        <div class="group">
          <label for="email" class="label">Email Address</label>
          <input id="email" name="email" type="text" class="input">
        </div>
        <div class="group">
          <input type="submit"name="signup" class="button" value="Sign Up">
        </div>
        <div class="hr"></div>
        <div class="foot-lnk">
          <label for="tab-1">Already Member?</a>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>
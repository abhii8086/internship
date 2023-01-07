<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login </title>
      <link rel="stylesheet" href="loginPage.css">
   </head>
   <body>
      <div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form method="post" action="server.php"> 
            <div class="field">
               <input type="text" name="uname" required>
               <label>User id</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="checkbox" style="margin-top: 10px;">
                  <input type="checkbox" id="remember-me" name="check_box" style="margin: top 10px;margin-top: 10px;">
                  <label for="remember-me" style="margin: top 10px;margin-top: 10px;">Remember me</label>
               </div>
               <div class="pass-link">
                  <a href="#" style="margin: top 10px;">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" value="Login" name="login" fdprocessedid="hze8r" style=" margin-top: 2px;">
            </div>
            <div class="field" style="margin-left: 45px;font-size: 20px;">
               Not a member? <a href="societyRegistration.php" type="button" class="cta">Sign Up</a>
            </div>
         </form>
      </div>
   </body>
</html>

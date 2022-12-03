<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login and Registration || Medcare</title>
      <link rel="stylesheet" href="Style.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="title-text">
            <div class="title login">
               Login Form
            </div>
         </div>
         <div class="form-container">
            <div class="form-inner">

               <!-- Login Section -->

               <form action="check.php" method="POST" class="login">
                  <div class="field">
                     <input type="email" placeholder="Email Address" id="email" name="email" required>
                  </div>
                  <div class="field">
                     <input type="password" placeholder="Password" id="password" name="password" required>
                  </div>
                  <div class="pass-link">
                     <a href="#">Forgot Password?</a>
                  </div>
                  <div class="field btn">
                     <div class="btn-layer"></div>
                     <input type="submit" value="Login">
                  </div>
                  <div class="signup-link">
                     Not a member? <a href="user_signup.php">SignUp Now</a>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");

         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
      </script>
   </body>
</html>

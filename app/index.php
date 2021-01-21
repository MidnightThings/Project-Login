<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginWorkflow</title>
  </head>
  <body>
    <div id="loginFormWrapper">
        <h1>Login</h1>
        <form method="POST" action="login/loginFormSubmit.php">
            <label for="inputUsername">E-Mail</label>
            <input type="text" name="inputUsername" title="Username" id="inputUsername" required/>
            <br>
            <label for="inputPassword">Password</label>
            <input type="password" name="inputPassword" title="Password" id="inputPassword" required/>
            <br>
            <input type="submit"/>
        </form>
    </div>
    <div id="registerFormWrapper" style="display: none">
        <h1>Register</h1>
        <form method="POST" action="register/registerFormSubmit.php">
            <label for="inputUsername">E-Mail</label>
            <input type="text" name="inputUsername" title="Username" id="inputRegisterUsername" required/>
            <br>
            <label for="inputPassword">Password</label>
            <input type="password" name="inputPassword" title="Password" id="inputRegisterPassword" required/>
            <br>
            <label for="inputPassword">Password wiederholen</label>
            <input type="password" name="inputPassword" title="Password" id="inputRegisterPasswordRepeat" required/>
            <br>
            <input type="submit"/>
        </form>
    </div>
      <input type="button" id="openRegister" value="Registrieren"/>
      <input type="button" id="openLogin" value="Login"/>
    <script src="./frontend/js/index.js"></script>
  </body>
</html>

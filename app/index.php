<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginWorkflow</title>
  </head>
  <body>
		<div>
			<form 
				method="POST" 
				action="login/loginFormSubmit.php"
			>
				<label for="inputUsername">Username</label>
				<input type="text" name="inputUsername" title="Username" id="inputUsername" />
				<br>
				<label for="inputPassword">Password</label>
				<input type="password" name="inputPassword" title="Password" id="inputPassword" />
				<br>
				<input type="submit"/>
			</form>
		</div>
  </body>
</html>
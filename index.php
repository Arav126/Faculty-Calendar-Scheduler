<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<style>
		/* Update color palette */
		:root {
			--primary-color: #070A52;
			--error-color: #D21312;
			--error-bg-color: #F2DEDE;
			--success-color: #ED2B2A;
			--success-bg-color: #D4EDDA;
		}
		
	</style>
</head>
<body  style="background: linear-gradient(to bottom right, var(--primary-color), #F15A59);">
     <form action="login.php" method="post">
     	<h2 style="color: var(--primary-color);">LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error" style="background: var(--error-bg-color); color: var(--error-color);"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="username" placeholder="User Name" style="border-color: var(--primary-color);"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password" style="border-color: var(--primary-color);"><br>

     	<button type="submit" style="background: var(--primary-color);">Login</button>
     </form>
</body>
</html>

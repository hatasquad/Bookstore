<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <title>Login</title>
</head>
<body>
    <img class="wave" src="img/wave2.png">
	<div class="container">
		<div class="img">
			<img src="img/undraw_Bibliophile_hwqc.svg">
		</div>
		<div class="login-content">
			<form action="php/auth.php" method="post">
				<img src="img/avatar.svg">
				<h2 class="title">Welcome</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
				<input type="submit" class="btn" value="Login">
				<input  class="btn " value="Registration">
            </form>
            <a href="php/books.php">books</a>
        </div>
    </div>
    <script type="text/javascript" src="js/login.js"></script>
</body>
</html>
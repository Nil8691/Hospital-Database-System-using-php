<!DOCTYPE html> 
<html lang="en">
<head>
  <title>Signup | login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/login.css">
</head>
<body>

<!-- Navbar -->
<div class="nav_bar">
	<form action="include/config_login.php" name="login" method="POST" >
	<div class="nav_bar_innerpart">
		<div>						
			<input type="submit" name="login_session" value="Start Login">
			<input type="password" name="password"placeholder="Password" >
			<input type="text" name="username" placeholder="Username/Email" >
		</div>
	</div>
		<div class="img">
			<img src="img/MCH-logo.png" width="10%" height=10%>
		</div>
	</form>
</div>
	<div class="Signup_Form">
		<div class="main-container">
				<div class="sub-container">
					<form action="include/config_login.php" name="signup" method="POST">
					<div>
						<p class="caption">New to Flexjobs join now!</p>
						<input type="text" class="signup_submit" name="username" placeholder="UsernameWithNumber">
					</div>
					<div>
						<input type="email" class="signup_submit" name="email" placeholder="Valid Email">
					</div>
					<div>
						<input type="password" class="signup_submit"  name="password" placeholder="Create Password">
					</div>
					<div >
						<input type="submit" class="signup_submit_button" name="register">
					</div>
					</form>
				</div>
		</div>
		<div class="main-container part2">
				<div class="Title">
					<h1>Hospital Management System</h1>
					<p>This is short overview of hospital management System</p>
				</div>
		</div>
	</div>
	<div class="footer">
		<div class="sub_footer">
			<p>We love working with enthusiastic clients who are as passionate about their business as we are about strategy, design, and development. If that sounds like you, we should talk.In western countries black is the color of mourning, death, and sadness. Black often represents the emotions and actions of rebellion in teenagers and youth. </p>
		</div>
	</div>
</body>
</html>

<?php

	session_start();

?>

<!DOCKTYPE html>
<html id=mainhtml>
<head>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	 
	<script type = "text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<script type = "text/javascript" src="main.js"></script>
	<script type = "text/javascript" src="clickmain.js"></script>
</head>
<body id=mainbody>
	
		<div id=holder style="visibility:hidden;">
		
				<div class="wrapper" class="upper" id="upper">
					<div class="container">
						<h1 class="upper" class="upperr">Welcome</h1>
					
						<form class="form" action="connect.php" method="post" name="loggingin" >
							<input  type="text" name="company" placeholder="Companyid">
							<input  type="text" name="user" placeholder="Username">
							<input type="password" name="password" placeholder="Password"><p id=wrong></p>
							<button type="submit" name=submit id="login-button">Login</button>
						</form>
					</div>
					
					<ul class="bg-bubbles" class="upper">
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li> 
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</ul>
				</div>
    

        <!--<script src="index.js"></script>-->	
		</div>
		
		<div id=holder2 style="visibility:hidden;position:relative;top:-1000px;">
		
		
					<div class="wrapper" id=lower>
						<div class="container">
						<h1 style="position:absolute;top:20px;left:508px;">Welcome</h1>
				
				<div class=upper id=hidden style="visibility:visible;">
				
				<form class =upper class="form" action="isreg.php" method="post" name=loggingin style="visiblity:visible;">
					
					<div name=adminn class=select style="position:absolute;top:20px;left:-150px;z-index:4;" onclick="return clickk(1);">Admin</div>
					<div name=employee class=select style="position:absolute;top:100px;left:-150px;z-index:4;" onclick="return clickk(0);">Employee</div>
					<div style="position:absolute;top:100px;left:-150px;z-index:4;"> </div> 
					
					
					<input class=upper type="text" name=user id=done placeholder="User id">
					<input class=upper type="text" name=fuser placeholder="Firstname">
					<input class=upper type="text" name=luser placeholder="Lastname">
					<input class=upper type="email" name=email placeholder="Email" id='txtEmail'>
					<input class=upper type="password" name=password placeholder="Password">
					<input class=upper type="text" name=companydetail placeholder="Companyid">
					<button class=upper type='submit' name=submit id="login-button">Register</button>
								
				</form>
				</div>
			</div>
			<ul class="bg-bubbles" class=upper>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
			</ul>
		</div>
		
		</div>
		
		<div id=holder3 style="visibility:hidden;position:relative;top:-1000px;">
		
			
		
		</div>
		
		<div id=checker style="width:0px;height:0px;visibility:hidden;"></div>
		
		<div class=header>
			<p style="float:left;" id=name><img class="name" src="index.gif" style="width:120px;height:120px;"/>AnonyBack</p>
		
		</div>
		
		
		
		<div class="bod1" onclick="return closee();">
		</div>
		<div class="bod2" onclick="return closee();">
		</div>
		
			<div class=box id=register>
				
					<button class="w3-btn w3-teal" id=bt1 onclick="return regclk();" onclick="return off();">REGISTER</button>
				
			</div>
			<div class=box id=login>
				
					<button class="w3-btn w3-teal" id=bt2 onclick="return logclk();" onclick="return off();">LOGIN</button>
				
			</div>
			<div class=box id=contact>
			
				<button class="w3-btn w3-teal" id=bt3 onclick="return conclk();" onclick="return off();">CONTACT</button>
			
			</div>
			<div class=box id=feed>
				
					<button class="w3-btn w3-teal" id=bt4 onclick="return fedclk();" onclick="return off();">FEEDBACK</button>
				
			</div>

</body>
</html>
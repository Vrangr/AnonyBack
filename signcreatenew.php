<?php

session_start();

?>

<html>
	<head>
		<title>Signed in</title>
		<link rel="stylesheet" href="signedin.css" type="text/css"/>
	</head>
	<body>
		<div id="container" style="float:left;">

			<div id="image" style="float:left;">
				<img src="index.gif"  align="left"style="width:90px;height:90px;"/>
			</div>

			<div id="texts" style="float:left;font-size:100px;font-family:Lucida Console;"> 
			AnonyBack
			</div>

		</div>
		<br/><br/><br/><br/><br/><br/>
		<ul class="navibar">
			<!--<li><a href="pending.php">Pending</a></li>-->
			<li><a href="signcreatenew.php">Create new</a></li>
			<li><a href="previous.php">Previous</a></li>
			<li><a href="signedin.php">Home</a><li>
			<li style="float:right;" id="signin">
			
			<li style="float:right;" id="signin"><a href="logout.php">Logout</a></li>
			<li style="float:right;" id="register"><a href="#">Hello <?php echo $_SESSION['userName']; ?>!</a></li>
		</ul>
		 
		<div class="left" style="clear:left;">
				
				
				<table>
				
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Admin id</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['adminid'];?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">User name</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['fname']. ' '.$_SESSION['lname'];?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Company id</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['cid']; ?></p>
						</td>
					
					</tr>
					
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Company Name</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $_SESSION['cname'];?></p>
						</td>
					
					</tr>
					
				
				</table>
				
		</div>
		<div class="playarea">
			<table class="table">
				<tr>
					<!--<th><a href="form1.php"><img src="form.png" style="width=150px;height:150px"/></a></th>-->
					<th><a href="form2.php"><img src="form.png" style="width=150px;height:150px"/></a></th>
				</tr>
				<tr>
					<!--<th>Complaint</th>-->
					<th>Feedback</th>
				</tr>
		</div>
	</body>
</html>
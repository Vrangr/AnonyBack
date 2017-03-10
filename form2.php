<?php

	session_start();

?>
<html>
	<head>
		<title>Signed in</title>
		<link rel="stylesheet" href="signedin.css" type="text/css"/>
	</head>
	<body>
		<div id="container" style="float:left;position:fixed;">

			<div id="image" style="float:left;">
				<img src="index.gif"  align="left"style="width:90px;height:90px;position:abolute;"/>
			</div>

			<div id="texts" style="float:left;font-size:100px;font-family:Lucida Console;" > 
			AnoyBack
			</div>

		</div>
		<br/><br/><br/><br/><br/><br/>
		<ul class="navibar" style="width:100%;position:fixed;">
			<!--<li><a href="pending.php">Pending</a></li>-->
			<li><a href="signcreatenew.php">Create new</a></li>
			<li><a href="previous.php">Previous</a></li>
			<li><a href="signedin.php">Home</a><li>
			<li style="float:right;" id="signin"><a href="logout.php">Logout</a></li>
			<li style="float:right;" id="register"><a href="#">Hello <?php echo $_SESSION['userName'];?>!</a></li>
		</ul>
		 
		<div class="left" style="clear:left;position:fixed;top:200px;">
				
				
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
		<div style="clear:left;position:fixed;top:200px;">
			<div class="playarea" style="clear:left;position:fixed;top:200px;width:100%;bottom:0px;left:0px;overflow-x:hidden;overflow-y;scroll;">
				<form class="form2" method="post" action="feedbacksubmit.php" name="form2" id="form2">
				<h1>Company Feedback</h1>
					<br/><br/>
				Q1)<textarea rows="2" class=area cols="40" name=q1></textarea><br/>
				<!--<input type="radio" name="q1a" value="1">1
				<input type="radio" name="q1a" value="1">2
				<input type="radio" name="q1a" value="1">3
				<input type="radio" name="q1a" value="1">4
				<input type="radio" name="q1a" value="1">5-->
				<br/><br/><br/>
				Q2)<textarea rows="2" class=area cols="40" name=q2></textarea><br/>
				<!--<input type="radio" name="q2a" value="1">1
				<input type="radio" name="q2a" value="1">2
				<input type="radio" name="q2a" value="1">3
				<input type="radio" name="q2a" value="1">4
				<input type="radio" name="q2a" value="1">5-->
				<br/><br/><br/>
				Q3)<textarea rows="2" class=area cols="40" name=q3></textarea><br/>
				<!--<input type="radio" name="q3a" value="1">1
				<input type="radio" name="q3a" value="1">2
				<input type="radio" name="q3a" value="1">3
				<input type="radio" name="q3a" value="1">4
				<input type="radio" name="q3a" value="1">5-->
				<br/><br/><br/>
				Q4)<textarea rows="2" class=area cols="40" name=q4></textarea><br/>
				<!--<input type="radio" name="q4a" value="1">1
				<input type="radio" name="q4a" value="1">2
				<i
				nput type="radio" name="q4a" value="1">3
				<input type="radio" name="q4a" value="1">4
				<input type="radio" name="q4a" value="1">5-->
				<br/><br/><br/>
				<button type=submit id=formsubmit name=submitbutton><span style="font-family:Helvetica;height:50px;width:200px;">Submit Form<span></button>
				</form>
			</div>
		</div>
	</body>
</html>
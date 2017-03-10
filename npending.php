<?php

session_start();

$con=mysqli_connect('localhost','root','password','FEEDBACKNEW');

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
			<li><a href="npending.php">Pending</a></li>
			
			<li><a href="#">Previous</a></li>
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
		<?php
		$userid=$_SESSION['uid'];
		$aid	=$_SESSION['adminid'];
		$forms_remain = mysqli_query($con,"SELECT * FROM form where user_id = '$userid' AND form_admin='$aid' AND  filled=0");
		$rows_returned	 = mysqli_num_rows($forms_remain);
		if($rows_returned==0)
		{
			echo '<div style="clear:left;position:fixed;top:200px;">
				<div class="playarea" style="clear:left;position:fixed;top:200px;width:100%;bottom:0px;left:0px;overflow-x:hidden;overflow-y;scroll;">
				<div style="">
					<p style="font-family:Helvetica;position:absolute;top:20px;left:300px;font-size:20px;color:red;background-color:white;">No pending form available</p>
				</div>
				</div>
				</div>';
		}
		else
		{
			$forms_row	=	mysqli_fetch_array($forms_remain);
			
			
			 echo '<div style="clear:left;position:fixed;top:200px;">
				<div class="playarea" style="clear:left;position:fixed;top:200px;width:100%;bottom:0px;left:0px;overflow-x:hidden;overflow-y;scroll;">
					
					<form class="form2" method="post" action="submitted.php" name="form2" id="form2">
					
					<h1>Company Feedback</h1>
						<br/><br/>';
					echo 'Q1)'.$forms_row['q1'].'<br/>'.'<br/>';
			echo '<input type="radio" name="q11" value="1">1
					<input type="radio" name="q11" value="2">2
					<input type="radio" name="q11" value="3">3
					<input type="radio" name="q11" value="4">4
					<input type="radio" name="q11" value="5">5
					<br/><br/><br/>';
					echo 'Q2)'.$forms_row['q2'].'<br/>'.'<br/>';
			echo '<input type="radio" name="q22" value="1">1
					<input type="radio" name="q22" value="2">2
					<input type="radio" name="q22" value="3">3
					<input type="radio" name="q22" value="4">4
					<input type="radio" name="q22" value="5">5
					<br/><br/><br/>';
					echo 'Q3)'.$forms_row['q3'].'<br/>'.'<br/>';
			echo '<input type="radio" name="q33" value="1">1
					<input type="radio" name="q33" value="2">2
					<input type="radio" name="q33" value="3">3
					<input type="radio" name="q33" value="4">4
					<input type="radio" name="q33" value="5">5
					<br/><br/><br/>';
					echo 'Q4)'.$forms_row['q4'].'<br/>'.'<br/>';
			echo '<input type="radio" name="q44" value="1">1
					<input type="radio" name="q44" value="2">2
					<input type="radio" name="q44" value="3">3
					<input type="radio" name="q44" value="4">4
					<input type="radio" name="q44" value="5">5
					<br/><br/><br/>
					<button type=submit id=formsubmit name=submitbutton><span style="font-family:Helvetica;height:50px;width:200px;">Submit Form<span></button>
					</form>
			</div>';
		}
		
		mysqli_close($con);
			
		?>
	</body>
</html>
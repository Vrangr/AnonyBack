<?php 

session_start(); 
$con=mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());
$uid	 = $_SESSION['uid'];

$detail_query = mysqli_query($con,"SELECT * FROM user WHERE userid='$uid';");
$detail_row	= mysqli_fetch_array($detail_query);

$_SESSION['adminid'] =	$detail_row['adminid'];
$aid				=	$detail_row['adminid'];
$_SESSION['fname'] =	$detail_row['fname'];
$_SESSION['lname'] =	$detail_row['last_name'];


$cid_query = mysqli_query($con,"SELECT * FROM admin WHERE adminid='$aid';");
$cid_row	= mysqli_fetch_array($cid_query);
$_SESSION['cname'] 	=	$cid_row['cname'];
$_SESSION['cid'] =	$cid_row['cid'];
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
			<li style="float:right;" id="signin"><a href="logout.php">Logout</a></li>
			<li style="float:right;" id="register"><a href="#">Hello <?php echo $_SESSION['userName']; ?> </a></li>
		</ul>
		 
		<div class="left" style="clear:left;">
				
				<table>
				
					<tr>
					
						<td>
						<p style="font-family:Helvetica">Admin id</p>
						</td>
						<td>
						<p style="font-family:Helvetica">:<?php echo $aid?></p>
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
			
		</div>
	</body>
</html>
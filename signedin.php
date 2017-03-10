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
			<!--<li><a href="pending.php">Pending</a></li>-->
			<li><a href="signcreatenew.php">Create new</a></li>
			<li><a href="previous.php">Previous</a></li>
			<li><a href="signedin.php">Home</a><li>
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
		<div style="clear:left;position:fixed;top:200px;">
		<div class="playarea" style="clear:left;position:fixed;top:200px;width:100%;bottom:0px;left:0px;overflow-x:hidden;overflow-y;scroll;">
			
			<form class=form2 action=addemployee.php method=post>
			
			<span style="font-family:helvetica;">Enter the number of new reviewers :</span><br/></br><input type=number  name=add >
			<br/>
			<button name=btn type=submit  style="font-family:Helvetica;position:absolute;left:30px;width:100px;top:70px;">Add</button>
			</form>
			
			<p style="font-family:Helvetica;position:relative;top:60px;left:300px;color:red;font-size:20px">Total Created userids are :
			<?php
			
				$aid			= $_SESSION['adminid'];
				$all_ids 		= mysqli_query($con,"SELECT * FROM user WHERE adminid='$aid'");
				$count_ids		= mysqli_num_rows($all_ids);
				echo $count_ids;
			?>
			
			<p style="font-family:helvetica;position:relative;top:60px;left:300px;color:red;font-size:20px">Unset Userids are	:
			<?php 
				
				$aid			= $_SESSION['adminid'];
				$unsetid 		= mysqli_query($con,"SELECT * FROM user WHERE fname is NULL AND adminid='$aid'");
				
				$unset_number	= mysqli_num_rows($unsetid);
				while($userid_row=mysqli_fetch_row($unsetid))
				{
					echo '('.$userid_row[0].')   ';
				}
				if($unset_number==0)
				{
					echo '</br>';
					echo '</br>No unset ids';
				}
			?>
			</p>
			
		</div>
		</div>
	</body>
</html>
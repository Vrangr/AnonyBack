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
			<li><a href="#">Previous</a></li>
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
			
			<?php
			
				$con			=	mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());
				$aid			=	$_SESSION['adminid'];
				$get_data		=	mysqli_query($con,"SELECT s1,s2,s3,s4,user_id FROM form WHERE form_admin='$aid' AND filled=1");
				//$get_data_row	=	mysqli_fetch_array($get_data);
				$get_data_no	=	mysqli_num_rows($get_data);
				$avg0			=	0;
				$avg1			=	0;
				$avg2			=	0;
				$avg3			=	0;
				if($get_data_no!=0)
				{
					while($get_value=mysqli_fetch_row($get_data))
					{
						echo '<span style="font-family:Helvetica;position:absolute;top:20px;left:300px;">Average for Q1) is '.$get_value[0].'</span>'.'</br></br>';
						$avg0	=	$avg0+$get_value[0];
						$avg1	=	$avg1+$get_value[1];
						$avg2	=	$avg2+$get_value[2];
						$avg3	=	$avg3+$get_value[3];
					}
					
						$avg0		=	$avg0/($get_data_no);
						$avg1		=	$avg1/($get_data_no);
						$avg2		=	$avg2/($get_data_no);
						$avg3		=	$avg3/($get_data_no);
					
					echo '<span style="font-family:Helvetica;position:absolute;top:0px;left:300px;">Feedback form has been filled by '.$get_data_no.' users</span>'.'.'.'</br></br>';
					
					echo '<span style="font-family:Helvetica;position:absolute;top:20px;left:300px;">Average for Q1) is '.$avg0.'</span>'.'</br></br>';
					echo '<span style="font-family:Helvetica;position:absolute;top:40px;left:300px;">Average for Q2) is '.$avg1.'</span>'.'</br></br>';
					echo '<span style="font-family:Helvetica;position:absolute;top:60px;left:300px;">Average for Q3) is '.$avg2.'</span>'.'</br></br>';
					echo '<span style="font-family:Helvetica;position:absolute;top:80px;left:300px;">Average for Q4) is '.$avg3.'</span>'.'</br></br>';
				}
				else
				{
					echo 'Forms are not filled yet';
				}
				
			?>
			
		</div>
		</div>
	</body>
</html>
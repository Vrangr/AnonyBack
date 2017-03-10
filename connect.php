<?php


function Signin(){
	session_start();
	
	$con=mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());
	//$db=mysqli_select_db('FEEDBACKNEW',$con) or die("Failed to connect to mysqli: " . mysqli_errno());
	$ID=$_POST["user"];
	$companyid=$_POST["company"];
	$passwordid=$_POST["password"];
	
	//echo 'Signing in';
	if(!empty($_POST['user'])&& isset($_POST['user']))
	{
		if(!empty($_POST['company']) && isset($_POST['company']))
		{
			$query = mysqli_query($con,"SELECT * FROM user where userid = '$ID' AND password = '$passwordid'") or die(mysqli_errno());
			$row = mysqli_fetch_array($query); //or die(mysqli_errno());
			$admin=$row['adminid'];
			echo $admin." ";
			$query2 = mysqli_query($con,"SELECT * FROM admin where adminid = '$admin'") or die(mysqli_errno());
			$row3 = mysqli_fetch_array($query2);// or die(mysqli_errno());
			
			if(!empty($row['userid']) AND !empty($row['password']) AND !empty($row3['cid']))
				{ 
					$_SESSION['userName'] = $row['fname'];
					$_SESSION['uid']	  =	$row['userid'];
					$_SESSION['isadmin']  = $row['isadmin'];
					
					$_SESSION['password'] =	$row['password'];
					$_SESSION['confirmation']= 'SUCCESSFULLY LOGIN TO USER PROFILE PAGE...';
					//echo'<script> </script>';
					
					$sql = mysqli_query($con,"UPDATE user SET active=1 WHERE userid='$ID'") or die(mysqli_errno());
					
					if($_SESSION['isadmin']==1)
					{
						header("Location: signedin.php");
					}
					else
					{
						header("Location: nsignedin.php");
					}
					
				} 
				else 
				{ 
					echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
				} 
		}
	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
	}
	mysqli_close($con);
}
if(isset($_POST['submit']))
{
	SignIn();
}
?>

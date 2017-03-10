<?php

session_start();
$con=mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());

$admin = $_SESSION['adminid'];


/*if($count_row['count']==0)
{
	$count_query	=	mysqli_query($con,"CREATE TABLE '$admin'
										(form_id INT AUTO_INCREMENT PRIMARY KEY)");
										
	$count_up	=	$count_row['count']+1;
	$update_count	= mysqli_query($con,"UPDATE admin SET count='$count_up'");
	
	$count_query	=	mysqli_query($con,"SELECT * FROM '$admin'");

}*/
$questions	=	array();
for($i=1;$i<5;$i++)
{
	$check	= 'q'.$i;
	echo $_POST[$check].' '.$check;
	if(empty($_POST[$check]) || !isset($_POST[$check]))
	{
		$flag=1;
		break;
	}
	array_push($questions,$_POST[$check]);
	$flag=0;
}

if($flag==0)
{
	$delete_prev	=	mysqli_query($con,"DELETE FROM form WHERE form_admin='$admin'");
	$get_users 		= 	mysqli_query($con,"SELECT userid FROM user where adminid='$admin'"); 
	$users_row		=	mysqli_fetch_array($get_users);
	$users_count	=	mysqli_num_rows($get_users);
	echo 'HHHH    ';
	$j=0;
	while($users_row=mysqli_fetch_row($get_users))
	{
		echo $users_row[0];
		$userid	 = $users_row[0];
		$insert_new = mysqli_query($con,"INSERT INTO form (form_admin,user_id,q1,q2,q3,q4)
											VALUES ('$admin','$userid','$questions[0]','$questions[1]','$questions[2]','$questions[3]')");
	}
	
	header("Location: form2.php");
}
else
{
	echo 'Some of the fields are not filled.';
}

mysqli_close($con);

?> 
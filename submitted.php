<?php

session_start();
$userid	= $_SESSION['uid'];
$aid	= $_SESSION['adminid'];
$con	= mysqli_connect('localhost','root','password','FEEDBACKNEW');

$form		= mysqli_query($con,"SELECT * FROM form where user_id = '$userid' AND form_admin = '$aid'");
$form_row	= mysqli_fetch_array($form);
$s			= array();

for($i=1;$i<5;$i++)
{
	$check	=	'q'.$i.$i;
	echo $check;
	if(empty($_POST[$check]) || !isset($_POST[$check]))
	{
		$flag=1;
		break;
	}
	array_push($s,$_POST[$check]);
	$flag=0;
}
if($flag==0)
{
	$form		= mysqli_query($con,"UPDATE form SET s1='$s[0]',s2='$s[1]',s3='$s[2]',s4='$s[3]',filled='1' WHERE user_id = '$userid' AND form_admin = '$aid'");
	
	header("Location: npending.php");
}
else
{
	echo 'Certain data was not filled';
}
mysqli_close($con);
?>
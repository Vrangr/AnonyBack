<?php

function registerr()
{
		session_start();
	
	$con=mysqli_connect('localhost','root','password','FEEDBACKNEW') or die("Failed to connect to mysqli: " . mysqli_errno());
	
	if(!empty($_POST['fuser']) && isset($_POST['fuser']))
	{
		if(!empty($_POST['luser']) && isset($_POST['luser']))
		{
			if(!empty($_POST['email']) && isset($_POST['email']))
			{
				if(!empty($_POST['password']) && isset($_POST['password']))
				{
					if(!empty($_POST['companydetail']) && isset($_POST['companydetail']))
					{
						$userid	=	$_POST['user'];
						$first	= 	$_POST['fuser'];
						$last	=	$_POST['luser'];
						$em		=	$_POST['email'];
						$pass	=	$_POST['password'];
						$cmp	=	$_POST['companydetail'];
						echo $cmp;
						if((mysqli_fetch_array(mysqli_query($con,"SELECT company_name FROM company WHERE company_name='$cmp'")))['company_name']!=NULL)
						{
							//reject
							echo 'Company or institution name already present please enter different value for company field';
							//$_SESSION['getter']	=	'Company or institution name already present please enter different value for company field';
						}
						else if((mysqli_fetch_array(mysqli_query($con,"SELECT * FROM company WHERE cid='$cmp'")))['cid']!=NULL) 
						{
							if((mysqli_fetch_array(mysqli_query($con,"SELECT * FROM user WHERE userid='$userid'")))['userid']!=NULL
								&&	(mysqli_fetch_array(mysqli_query($con,"SELECT * FROM user WHERE userid='$userid' && fname is NULL")))['userid']!=NULL)
								{	$query_adminid	=	mysqli_query($con,"SELECT * FROM admin WHERE cid='$cmp'");
									$rowadmin		=	mysqli_fetch_array($query_adminid);
									$aid			=	$rowadmin['adminid'];
									
									//$query_useremail	=	mysqli_query($con,"SELECT * FROM user WHERE email='$em'");
									//$rowem			=	mysqli_fetch_array($query_useremail);
									//$emf				=	$rowem['email'];
									
									
									
									$query_insertnew	=	mysqli_query($con,"UPDATE user SET fname='$first',last_name='$last',password='$pass',email='$em',adminid='$aid' WHERE userid='$userid'");
									
									$get_userid_created	=	mysqli_query($con,"SELECT * FROM user WHERE email='$em'");
									$row_get_userid_created	=mysqli_fetch_array($get_userid_created);
									$created_userid		=	$row_get_userid_created['userid'];
									
									
									echo 'You are regestered as an employee with userid'.$created_userid.'.';
									
								
								}
								else
								{
									echo 'Either userid is already used or admin has not authorized this id';
									
								}
						}
						else //if(isset($_POST['adminn']))
						{
							//insert
							$query_insertnew_comp	=	mysqli_query($con,"INSERT INTO company (company_name) VALUES('$cmp')");
							$get_cid				=	mysqli_query($con,"SELECT * FROM company WHERE company_name='$cmp'");
							$rowcid					=	mysqli_fetch_array($get_cid);
							$new_cid				=	$rowcid['cid'];
							
							
							$query_insertnew_admin	=	mysqli_query($con,"INSERT INTO admin (cid,cname) VALUES('$new_cid','$cmp')");
							$query_getnew_admin		=	mysqli_query($con,"SELECT * FROM admin WHERE cid='$new_cid'");
							$row_getnew_admin		=	mysqli_fetch_array($query_getnew_admin);
							$_getnew_admin			=	$row_getnew_admin['adminid'];
							
							
							
							$query_insertnew_else	=	mysqli_query($con,"INSERT INTO user (fname,last_name,password,email,adminid,isadmin) VALUES('$first','$last','$pass','$em','$_getnew_admin','1')");
							$created_userid			=	mysqli_query($con,"SELECT * FROM user WHERE email='$em'");
							$user_get				=	mysqli_fetch_array($created_userid);
							
							echo 'You are regestered as an admin with userid '.$user_get["userid"].' and company id '.$new_cid.'.';
							
						}
						/*else
						{
							echo 'If you represent a new company select admin option';
						}*/
					
					
					}
					else
					{
						echo 'Company field empty`';
					}
				}
				else
				{
					echo 'Password field empty';
				}
		
			}
			else
			{
				echo 'Email field might be empty or format might be wrong';
			}
		}
		else
		{
			echo 'Last Name filed is not filled';
			
		}
	}
	else
	{
			echo 'First name is not filled';
	}
	
	header("refresh:5;url=main.html");
	
	mysqli_close($con);
}

if(isset($_POST['submit']))
{
	registerr();
}

?>
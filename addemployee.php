<?php
			session_start();
			$aid	= $_SESSION['adminid'];
			$con=mysqli_connect('localhost','root','password','FEEDBACKNEW');
			
			if(isset($_POST['btn']) && !empty($_POST['add']))
			{
				
				for($i=0;$i<$_POST['add'];$i++)
				{
					echo $_POST['add'];
					$add_query = mysqli_query($con,"INSERT INTO user (adminid) VALUES ('$aid')");
				}
				header("Location: signedin.php");
			}
			else
			{
				header("Location: signedin.php");
			}
			
			
?>
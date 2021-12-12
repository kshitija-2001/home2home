<?php	
session_start();        
include('Connect.php');

if(isset($_POST['login']))
{  
	$email = $_POST['email'];
	$password = $_POST['password'];
	$query1 = " SELECT * FROM `buisness` WHERE `email` = '$email' ";
    $res1 = mysqli_query($Connect,$query1);

	
	if(mysqli_num_rows($res1)>0)
	{
		$data = mysqli_fetch_assoc($res1);
		if(strcmp($data['password'],$password)==0)
		{   
            $_SESSION['name']  =  $data['name'];
			$_SESSION['emailid']=$data['email'];
            $id=$data['id'];
            echo("<script>window.location = 'buisnesshome.php?id=$id'</script>");
		}
		else
		{
            echo("<script>alert('Password is Wrong! Please try again!')</script>");
            echo("<script>window.location = 'buisnesslogin.php'</script>");
		}
	}
	else
	{
		echo("<script>alert('Please Sign Up! Username Not Found!')</script>");
        echo("<script>window.location = 'buisnesslogin.php'</script>");
	}
}
else
{
    echo("<script>alert('Undefined Action!')</script>");
    echo("<script>window.location = 'buisnesslogin.php'</script>");
}
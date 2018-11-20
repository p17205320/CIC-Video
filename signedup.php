<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css"> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <?php include("tooltip.php")?>
   <meta http-equiv="Refresh" content="3; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
    <title>CIC Video</title>
 </head>

<body>
<?php include("banner.php"); include("navigation.php"); ?>



<div id = "mainContent">

			
<?php
include("connect.php");
                $stmt = $con->prepare( "SELECT username FROM `users` WHERE Username IN (?)");
                $stmt->bind_param('s', $_POST ['username']);
                $stmt->execute(); 
                $result = $stmt->get_result();
	$num_rows = mysqli_num_rows($result); 
	if ($num_rows != 0) 
		{ 
		echo "<h1>Sorry, the username ".$_POST ['username']." is already taken.</h1>";
		} 
	else 
		{
		$pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $user = $_POST['username'];        
        $stmt = $con->prepare ("INSERT INTO users (Username, Password) VALUES (?, ?)");
        $stmt->bind_param('ss', $user, $pass);
        $stmt->execute(); 
        $stmt->close();
		echo "<h1>Account Created</h1>";
		mysqli_close($con);
		}
?>
			
</p>
</div>
    <?php include("bottom.php")?>

</body>
</html>

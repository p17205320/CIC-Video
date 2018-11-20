
<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <?php include("tooltip.php")?>
   <meta http-equiv="Refresh" content="3; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
 </head>
<title>CIC Video</title>
<body>
<?php include("banner.php"); ?>
    <nav id = "navi">
    </nav>


<div id = "mainContent">

<?php
    include("connect.php");
// This prepares the statement
       $stmt = $con->prepare( "SELECT Password FROM USERS WHERE Username = (?)");
    // This binds the username to the username array from POST
       $stmt->bind_param('s', $_POST['username']);
    // runs the statement
        $stmt->execute();
    // puts the result into an array
        $result = $stmt->get_result();
            // puts the hash from the database
            while($row = mysqli_fetch_array($result))
		{
		$hash = $row['Password'];
		}
                // Verifys that the password given by the user matches the hash from the database
                if (password_verify($_POST['password'], $hash)) {
                    //If the password is verified this cookie is set to show that the user is logged in.
                    setcookie("LoggedIn", "Yes", time()+36000);
                    // Adds the user's name to the php session cookie
                    $_SESSION['Name'] = $_POST['username'];
                    echo "<h1>Login Successful!</h1>";
                    } else {
                        echo '<h1>Invalid password.</h1>';
                    }
			
    mysqli_close($con);
?>

</div>
    <?php include("bottom.php")?>

</body>
</html>

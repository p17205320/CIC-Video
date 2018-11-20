
<?php
                    setcookie("LoggedIn", "Yes", time()-3600);
                    $_SESSION['Name'] = null
?>


<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css"> 
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
   <meta http-equiv="Refresh" content="3; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
 </head>
<title>CIC Video</title>
<body>
<div class = "banner">
<img src = "Images/banner_logo.png" alt = "CIC Video" style = "display:block; margin-left: auto; margin-right: auto; max-height: 100%"> </img>
</div>
    <?php include("banner.php"); include("navigation.php"); ?>


<div id = "mainContent">
<h1> You have now been logged out</h1>
</div>
    <?php include("bottom.php")?>

</body>
</html>

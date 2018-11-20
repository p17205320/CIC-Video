


<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <?php include("tooltip.php")?>
   <meta http-equiv="Refresh" content="3; url=<?php echo $_SERVER['HTTP_REFERER'];?>"> 
    
 </head>
<title>CIC Video</title>
<body>
<?php include("banner.php"); include("navigation.php"); ?>



<div id = "mainContent">


<?php
include("connect.php");
            if (isset($_COOKIE['LoggedIn'])) {
            if ($_COOKIE['LoggedIn'] == "Yes") {
                $stmt = $con->prepare( "SELECT * FROM `users` WHERE Username IN (?)");
                $stmt->bind_param('s', $_COOKIE['Name']);
                $stmt->execute(); 
                $result = $stmt->get_result();
	             while($row = mysqli_fetch_array($result)){
                        if ($_COOKIE['Enc'] == $row['Enc']) {
                            $user_id = $row['User_ID'] ;
                            } 
                        }  
		              }

            }
    

    if ($_GET["Type"] == "Film") {
       $stmt = $con->prepare( "INSERT INTO film_reviews (Film_ID, User_ID, Title, Rating, Content) VALUES (?, ?, ?, ?, ?)");
    }
    
    if ($_GET["Type"] == "Game") {
       $stmt = $con->prepare( "INSERT INTO game_reviews (Game_ID, User_ID, Title, Rating, Content) VALUES (?, ?, ?, ?, ?)");
    }
       $stmt->bind_param('iisis', $_GET["ID"], $user_id, $_POST["Review_Title"], $_POST["Review_Rating"], $_POST["Review_Content"]);
        $stmt->execute(); 
        $stmt->close();
    
        echo "<h1>Review added, taking you back to previous page</h1>";


	
?>
</div>
    <?php include("bottom.php")?>

</body>
</html>

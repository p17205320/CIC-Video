<?php
	// Putting post title and text into variable

if ($type == "Film") {
  $genreArray = $_POST['Genre'];
  $film_id = 0;
} elseif ($type == "Game") {
    $platformArray = $_POST["Platform"];
    $genreArray =  $_POST["Genre"];
}
?>


<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <?php include("tooltip.php")?>
 </head>
<title>CIC Video</title>
<body>
<?php include("banner.php"); include("navigation.php"); ?>



<div id = "mainContent">


<?php
include("connect.php");



	// Insert post into database
	if ($_GET["Type"] == "Film") 
        {
		$stmt = $con->prepare( "INSERT INTO film_entries (Title, Year, Synopsis, Image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('siss', $_POST["Title"], $_POST["Year"], $_POST["Synopsis"], $_POST["Image"]);
        $stmt->execute(); 
        $stmt->close();

	$sql = "SELECT Film_ID FROM film_entries ORDER BY Film_ID DESC LIMIT 1";
        
	$sql = mysqli_query($con, $sql);


	$film_id = mysqli_fetch_row($sql);

	foreach ($genreArray as $postGenre) {
    $genre = $postGenre;
        
        $stmt = $con->prepare( "SELECT Film_Genre_ID FROM film_genre WHERE  Genre IN (?)");
        $stmt->bind_param('s', $genre);
        $stmt->execute(); 
        $result = $stmt->get_result();
        
  	while($row = mysqli_fetch_array($result))
  		{
  		$genre = $row['Film_Genre_ID'];
  		}

		$stmt = $con->prepare ("INSERT INTO `film_genre_bridge` (`Film_ID`, `Film_Genre_ID`) VALUES (?, ?)");
        $stmt->bind_param('ii', $film_id[0] ,$genre);
        $stmt->execute(); 
        $stmt->close();
		mysqli_query($con, $sql);
		}				
    
    
    } 
    
    
    if ($type == "Game") 
    {
        $stmt = $con->prepare( "INSERT INTO game_entries (Title, Year, Synopsis, Image) VALUES (?, ?, ?, ?)");
        $stmt->bind_param('siss', $_POST["Title"], $_POST["Year"], $_POST["Synopsis"], $_POST["Image"]);
        $stmt->execute(); 
        $stmt->close();

	$sql = "SELECT Game_ID FROM game_entries ORDER BY Game_ID DESC LIMIT 1";
	$sql = mysqli_query($con, $sql);
	$game_id = mysqli_fetch_array($sql);

	foreach ($platformArray as $postPlatform) {
    $platform = $postPlatform;       
    $stmt = $con->prepare( "SELECT Game_Platform_ID FROM game_platform WHERE  Platform IN (?)");
        $stmt->bind_param('s', $platform);
        $stmt->execute(); 
        $result = $stmt->get_result();

  	while($row = mysqli_fetch_array($result))
  		{
  		$platform = $row['Game_Platform_ID'];
  		}

		$stmt = $con->prepare ("INSERT INTO `game_platform_bridge` (`Game_ID`, `Game_Platform_ID`) VALUES (?, ?)");
        $stmt->bind_param('ii', $game_id[0] ,$platform);
        $stmt->execute(); 
        $stmt->close();
    }
        
    $sql = "SELECT Game_ID FROM game_entries ORDER BY Game_ID DESC LIMIT 1";
	$sql = mysqli_query($con, $sql);
	$game_id = mysqli_fetch_array($sql);

	foreach ($genreArray as $postGenre) {
    $genre = $postGenre;
        $stmt = $con->prepare( "SELECT Game_Platform_ID FROM game_genre WHERE  Genre IN (?)");
        $stmt->bind_param('s', $genre);
        $stmt->execute(); 
        $result = $stmt->get_result();

  	while($row = mysqli_fetch_array($result))
  		{
  		$genre = $row['Game_Genre_ID'];
  		}

		$stmt = $con->prepare ("INSERT INTO `game_genre_bridge` (`Game_ID`, `Game_Genre_ID`) VALUES (?, ?)");
        $stmt->bind_param('ii', $game_id[0] ,$genre);
        $stmt->execute(); 
        $stmt->close();
    }
        
    }
  

	mysqli_close($con);
	echo "<h1>$title has been added to the $type database.</h1>"
?>
</div>
    <?php include("bottom.php")?>

</body>
</html>

 <?php

?>
<html>
<head> <link rel="stylesheet" type="text/css" href="style.css">
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600' rel='stylesheet' type='text/css'>
    <?php include("tooltip.php")?>
<script type="text/javascript" src="jquery.tablesorter.js"></script> 
 </head>
<title>CIC Video</title>
<body>
<?php include("banner.php"); include("navigation.php"); ?>



<div id = "mainContent">

<table id="list" class="tablesorter tooltip" Title = 'This table shows you which films/videogames fit the criteria you specified. Click on one of the links to go to that page' style = "width: 100%">
<thead> 
<tr> 
    <th>Image</th> 
    <th>Title</th> 
</tr> 
</thead> 
<tbody>
    <!-- This script is by  Christian Bach and is licensed under the MIT license. it is used to sort the table after all the entries are put in the database -->
    <script>
    $(document).ready(function() 
    { 
        $("#list").tablesorter({sortList: [[0,0], [1,0]]}); 
    } 
); 
    </script>    

<?php 
include("connect.php");
        // If the  user is looking for a film
        if ($_GET["Type"] == "Film") {
            // if the user is sorting by Genre
            if ($_GET["SortBy"] == "Genre") {
                echo "<h1>".$_GET["Genre"]." Films</h1>";
        // Select the ID for the genre from the genre table
        $sql = "SELECT Film_Genre_ID FROM film_genre WHERE  Genre IN ('".$_GET["Genre"]."')";
        $result = mysqli_query($con, $sql);
        //Puts it in a varible
        while($row = mysqli_fetch_array($result))
            {
                $genre_id = $row['Film_Genre_ID'];
            }
        //Finds which movies have that genre by getting Film_IDs that have that  Film_Genre_ID            
        $sql2 = "SELECT Film_ID FROM film_genre_bridge WHERE Film_Genre_ID IN ('".$genre_id."')";
        $result2 = mysqli_query($con, $sql2);

        while ($row = mysqli_fetch_array($result2))
        {   // selects all the information for that film_id
            $sql3 = "SELECT * FROM film_entries WHERE Film_ID IN ('".$row['Film_ID']."')";
            $result3 = mysqli_query($con, $sql3);
            while ($row = mysqli_fetch_array($result3))
            {
                // Puts it into a table row
                echo "<tr>";
                echo "<td style = 'Width: 50px'> <img style='width: 50px' src = '".$row['Image']."'></img></td>";
                echo "<td> <h2><a href = viewentry.php?Type=Film&ID=".$row['Film_ID'].">".$row['Title']."</a></h2> </td>"; 
                echo "</tr>";
                
            }
        
            
            }
        } 
        } 
            // If the user is looking for a game
            if ($_GET["Type"] == "Game") {
                //If the user is sorting by platform
                if ($_GET["SortBy"] == "Platform") 
                {
                                echo "<h1>".$_GET["Platform"]." Games</h1>";
                    // Works the same way as explained above just selects from a different table
        $sql = "SELECT Game_Platform_ID FROM game_platform WHERE  platform IN ('".$_GET["Platform"]."')";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result))
            {
                $platform_id = $row['Game_Platform_ID'];
            }
         
        $sql2 = "SELECT Game_ID FROM game_platform_bridge WHERE Game_platform_ID IN ('".$platform_id."')";
        $result2 = mysqli_query($con, $sql2);

        while ($row = mysqli_fetch_array($result2))
        {
            $sql3 = "SELECT * FROM game_entries WHERE Game_ID IN ('".$row['Game_ID']."')";
            $result3 = mysqli_query($con, $sql3);
            while ($row = mysqli_fetch_array($result3))
            {
                echo "<tr>";
                echo "<td style = 'Width: 50px'> <img style='width: 50px' src = '".$row['Image']."'></img></td>";
                echo "<td> <h2><a href = viewentry.php?Type=Game&ID=".$row['Game_ID'].">".$row['Title']."</a></h2> </td>"; 
                echo "</tr>";
            }
        }
                    
                } 
                //If the user is sorting by genre
                if ($_GET["SortBy"] == "Genre") {
                     echo "<h1>".$_GET["Genre"]." Games</h1>";
                     // Works the same way as explained above just selects from a different table
        $sql = "SELECT Game_Genre_ID FROM game_genre WHERE  genre IN ('".$_GET["Genre"]."')";
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_array($result))
            {
                $genre_id = $row['Game_Genre_ID'];
            }
          
        $sql2 = "SELECT Game_ID FROM game_genre_bridge WHERE Game_genre_ID IN ('".$genre_id."')";
        $result2 = mysqli_query($con, $sql2);
                    
        while ($row = mysqli_fetch_array($result2))
        {
            $sql3 = "SELECT * FROM game_entries WHERE Game_ID IN ('".$row['Game_ID']."')";
            $result3 = mysqli_query($con, $sql3);
            while ($row = mysqli_fetch_array($result3))
            {
                echo "<tr>";
                echo "<td style = 'Width: 50px'> <img style='width: 50px' src = '".$row['Image']."'></img></td>";
                echo "<td> <h2><a href = viewentry.php?Type=Game&ID=".$row['Game_ID'].">".$row['Title']."</a></h2> </td>"; 
                echo "</tr>";
            }    

        }
                   
                }

        } 
        mysqli_close($con);
    ?>
    </tbody>
    </table>
    


</div>
    <?php include("bottom.php")?>

</body>
</html>

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
    // If the user wants to add a film
    if ($_GET["Type"] == "Film") {
        // echos the first part of the form 
		echo " 
		<form action='postentry.php?Type=Film' class='Form' method='POST' novalidate=''>
		<h2>  Add Film  </h2>  <div id='field1-container' class='field f_100'>
          <label for='field1'>
               Title
          </label>
          <input type='text' name='Title' id='field1' required='required'>
     </div>


     <div id='field2-container' class='field f_25'>
          <label for='field2'>
               Year
          </label>
          <input type='number' name='Year' id='field2' required='required' min='1800'
          max='2999'>
     </div>


     <div id='field3-container' class='field f_100 checkbox-group required'>
          <label for='field3-1'>
               Genre (Pick All That Apply)
          </label>";



	
        //Selects all of the genres from the film_genre table 
	$result = mysqli_query($con, "SELECT `Genre` FROM `film_genre` WHERE 1  ORDER BY `film_genre`.`Genre` ASC");

	//For each film genre in the array made from the above query
	while($row = mysqli_fetch_array($result))
		{
        // Make a checkbox item with the genre name pointed to in the array
		echo "<div class='option clearfix'>
               <input type='checkbox' name='Genre[]' id='field3-1' value='".$row['Genre']."'>
               <span class='option-title'>
                    ".$row['Genre']."
               </span>
               <br>
          </div>";
		}
        

        // echos the rest of the form    
     echo "</div>";


     echo "<div id='field4-container' class='field f_100'>
          <label for='field4'>
               Synopsis
          </label>
          <textarea rows='5' cols='20' name='Synopsis' id='field4' required='required'></textarea>
     </div>

     <div id='field5-container' class='field f_100'>
              <label for='field5'>
                   Image URL
              </label>
              <input type='url' name='Image' id='field5' required='required'>
         </div>

     <div id='form-submit' class='field f_100 clearfix submit'>
          <input type='submit' value='Add Film'>
     </div>
</form>" ;
        // if the user wants to add a game
    } elseif ($_GET["Type"] == "Game")  {

      echo " <form action='postentry.php?Type=Game' class='TTWForm' method='POST' novalidate=''>
    <h2> Add Game </h2>       
           
          <div id='field1-container' class='field f_100'>
               <label for='field1'>
                    Title
               </label>
               <input name='Title' id='field1' required='required' type='text'>
          </div>
           
           
          <div id='field4-container' class='field f_25'>
               <label for='field4'>
                    Year
               </label>
               <input max='2999' min='1950' name='Year' id='field4' required='required'
               type='number'>
          </div>
           
           <div id='field6-container' class='field f_100 checkbox-group required'>
               <label for='field6-1'>
                    Genre (Pick all that apply)
               </label>";
        // Same thing as above but selects genre from the game_genre table
          $result = mysqli_query($con, "SELECT `Genre` FROM `game_genre` WHERE 1 ORDER BY `game_genre`.`Genre` ASC");


	while($row = mysqli_fetch_array($result))
		{
		echo " <div class='option clearfix'>
                    <input name='Genre[]' id='field6-1' value='".$row['Genre']."' type='checkbox'>
                    <span class='option-title'>
                         ".$row['Genre']."
                    </span>
                    <br>
               </div>";
		}
          
         echo "
          

           <br>
           <br>
           
          <div id='field7-container' class='field f_100 checkbox-group required'>
               <label for='field7-1'>
                    Platform (Pick all that apply)
               </label>
                
                
               ";

	
        // Same thing as above but selects platform from the game_platform table
	$result = mysqli_query($con, "SELECT `Platform` FROM `game_platform` WHERE 1 ORDER BY `game_platform`.`Platform` ASC");

	while($row = mysqli_fetch_array($result))
		{
		echo " <div class='option clearfix'>
                    <input name='Platform[]' id='field7-1' value='".$row['Platform']."' type='checkbox'>
                    <span class='option-title'>
                         ".$row['Platform']."
                    </span>
                    <br>
               </div>";
		}
        
;    
          echo "</div>";
          echo "<div id='field8-container' class='field f_100'>
               <label for='field8'>
                    Synopsis
               </label>
               <textarea rows='5' cols='20' name='Synopsis' id='field8' required='required'></textarea>
          </div>
           
           
          <div id='field9-container' class='field f_100'>
               <label for='field9'>
                    Image
               </label>
               <input name='Image' id='field9' required='required' type='url'>
          </div>
           
           
          <div id='form-submit' class='field f_100 clearfix submit'>
               <input value='Add Game' type='submit'>
          </div>
     </form>";
    } else {
// no type specified
     echo "<h1> ERROR </h1>";
     echo "<p> Type Not Specified </p>";
    }
    mysqli_close($con)
?>
    </div>
    </div>
    <?php include("bottom.php")?>
</body>
</html>

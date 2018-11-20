<?php
$type = $_GET["Type"];

$id = $_GET["ID"];
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
    
        if ($type == "Film") {
            
                $stmt = $con->prepare( "SELECT * FROM film_entries WHERE Film_ID IN (?)");
                $stmt->bind_param('i', $id);
                $stmt->execute(); 
                $result = $stmt->get_result();

        
        while($row = mysqli_fetch_array($result))
            {
                echo "
                <table  class = 'tooltip' Title = 'This table shows you information on the film you are viewing'>
    <tr>
        <td rowspan='4'><img style = 'height: auto; max-width: 300px' src = '".$row['Image']."'></img></td>
        <td colspan='2' style><h1>".$row['Title']."</h1></td>
    </tr>
    <tr>
        <td><h2>Year:</h2></td>
        <td><h2>".$row['Year']."</h2></td>
    </tr>
    <tr>
        <td><h2>Genre:</h2></td>
        <td><h2>
    ";
          
    $stmt = $con->prepare( "SELECT Film_Genre_ID FROM film_genre_bridge WHERE Film_ID IN (?)");
    $stmt->bind_param('i', $id);
    $stmt->execute(); 
    $result = $stmt->get_result();        
    while($row2 = mysqli_fetch_array($result))
    {
                $stmt = $con->prepare( "SELECT Genre FROM film_genre WHERE Film_Genre_ID IN (?)");
                $stmt->bind_param('i', $row2['Film_Genre_ID']);
                $stmt->execute(); 
                $result2 = $stmt->get_result(); 
        
        while($row3 = mysqli_fetch_array($result2)) {
            echo "<a href = list.php?Type=Film&SortBy=Genre&Genre=".$row3['Genre'].">".$row3['Genre']."</a>           ";
        }
    }
            
    echo "
    </h2></td>
    
    <tr>
        <td colspan='2'>".$row['Synopsis']."</td>
    </tr>
</table>
                 ";
            }
                    echo "<div id = 'Reviews'> 
        <br>
        <h2 style = 'text-align: center'> Reviews </h2>";
    $stmt = $con->prepare( "SELECT * FROM film_reviews WHERE Film_ID = (?)");
    $stmt->bind_param('i', $id);
    $stmt->execute(); 
    $result = $stmt->get_result();
    while($row = mysqli_fetch_array($result))
            {
                    echo "<br>
    <table border='1'>
    <tr>
        <th > Username </th>
        <th> Title </th>
        <th> Rating </th>
    </tr>
  <tr style = 'text-align: center'>
    <td>"; 
        $stmt = $con->prepare( "SELECT Username FROM users WHERE User_ID IN (?)");
        $stmt->bind_param('i', $row['User_ID']);
        $stmt->execute(); 
        $result2 = $stmt->get_result();
        while($row2 = mysqli_fetch_array($result2))
        {   
            echo $row2['Username'];
        }
        
        echo "</th>
    <td>".$row['Title']."</td>
    <td>".$row['Rating']."</th>
  </tr>
  <tr>
    <td colspan='3'>".$row['Content']."</td>
  </tr>
</table>
</div>
    ";
            }
        } 
    if ($type == "Game") {
        $stmt = $con->prepare( "SELECT * FROM game_entries WHERE Game_ID IN (?)");
        $stmt->bind_param('i', $id);
        $stmt->execute(); 
        $result = $stmt->get_result();
        
        while($row = mysqli_fetch_array($result))
            {
                echo "
                <table  class = 'tooltip' Title = 'This table shows you information on the videogame you are viewing'>
    <tr>
        <td rowspan='6'><img style = 'height: auto; max-width: 300px' src = '".$row['Image']."'></img></td>
        <td colspan='2' style><h1>".$row['Title']."</h1></td>
    </tr>
    <tr>
        <td><h2>Year:</h2></td>
        <td><h2>".$row['Year']."</h2></td>
    </tr>
<tr>
        <td><h2>Genre:</h2></td>
        <td><h2>
    ";
          
            $stmt = $con->prepare( "SELECT Game_Genre_ID FROM game_genre_bridge WHERE Game_ID IN (?)");
            $stmt->bind_param('i', $id);
            $stmt->execute(); 
            $result = $stmt->get_result();        
    while($row2 = mysqli_fetch_array($result))
    {
        $stmt = $con->prepare( "SELECT Genre FROM game_genre WHERE Game_Genre_ID IN (?)");
        $stmt->bind_param('i', $row2['Game_Genre_ID']);
        $stmt->execute(); 
        $result2 = $stmt->get_result();
        
        while($row3 = mysqli_fetch_array($result2)) {

            echo "<a href = list.php?Type=Game&SortBy=Genre&Genre=".urlencode($row3['Genre']).">".$row3['Genre']."</a>           ";
        }
    }
            
    echo "
    </h2></td>
    
    <tr>
    <tr>
        <td><h2>Platform:</h2></td>
        <td><h2>
    ";
          
            $stmt = $con->prepare( "SELECT Game_Platform_ID FROM game_platform_bridge WHERE Game_ID IN (?)");
            $stmt->bind_param('i', $id);
            $stmt->execute(); 
            $result = $stmt->get_result();        
    while($row2 = mysqli_fetch_array($result))
    {
        $stmt = $con->prepare( "SELECT Platform FROM game_platform WHERE Game_Platform_ID IN (?)");
        $stmt->bind_param('i', $row2['Game_Platform_ID']);
        $stmt->execute(); 
        $result2 = $stmt->get_result(); 
        
        while($row3 = mysqli_fetch_array($result2)) {
            echo "<a href = list.php?Type=Game&SortBy=Platform&Platform=".urlencode($row3['Platform']).">".$row3['Platform']."</a>           ";
        }
    }
            
    echo "
    </h2></td>
    
    <tr>
        <td colspan='2'>".$row['Synopsis']."</td>
    </tr>
</table>
                ";
       
            
        }
        echo "<div  class = 'tooltip' Title = 'Here you can see the reviews other people have left for this item' id = 'Reviews'> 
        <br>
        <h2> Reviews </h2>";
        $stmt = $con->prepare( "SELECT * FROM game_reviews WHERE Game_ID = (?)");
        $stmt->bind_param('i', $id);
        $stmt->execute(); 
        $result = $stmt->get_result();
    while($row = mysqli_fetch_array($result))
            {
                    echo "<br>
    <table border='1'>
    <tr>
        <th > Username </th>
        <th> Title </th>
        <th> Rating </th>
    </tr>
  <tr style = 'text-align: center'>
    <td>"; 
        $stmt = $con->prepare( "SELECT Username FROM users WHERE User_ID IN (?)");
        $stmt->bind_param('i', $row['User_ID']);
        $stmt->execute(); 
        $result2 = $stmt->get_result();
        while($row2 = mysqli_fetch_array($result2))
        {   
            echo $row2['Username'];
        }
        
        echo "</th>
    <td>".$row['Title']."</td>
    <td>".$row['Rating']."</th>
  </tr>
  <tr>
    <td colspan='3'>".$row['Content']."</td>
  </tr>
</table>  </div>  ";

            }
        }
    


    
    if (isset($_COOKIE['LoggedIn'])) {
        echo "
        <br>
        <br>
        <div  class = 'tooltip' Title = 'Here you can create a review to add to the database. Add the required information using the form and click the add review button to add the review to the database'>
        <h2>Add Review</h2>
             <form action='postreview.php?Type=".$type."&ID=".$id."' class='TTWForm' method='post' novalidate=''>
           
           
          <div id='field3-container' class='field f_100'>
               <label for='field3'>
                    Title
               </label>
               <input type='text' name='Review_Title' id='field3' required='required'>
          </div>
           
           
          <div id='field4-container' class='field f_25'>
               <label for='field4'>
                    Rating
               </label>
               <select name='Review_Rating' id='field4' required='required'>
                    <option id='field4-1' value='1'>
                         1
                    </option>
                    <option id='field4-2' value='2'>
                         2
                    </option>
                    <option id='field4-3' value='3'>
                         3
                    </option>
                    <option name='Review_Rating' id='Review_Rating-4' value='4'>
                         4
                    </option>
                    <option name='Review_Rating' id='Review_Rating-5' value='5'>
                         5
                    </option>
                    <option name='Review_Rating' id='Review_Rating-6' value='6'>
                         6
                    </option>
                    <option name='Review_Rating' id='Review_Rating-7' value='7'>
                         7
                    </option>
                    <option name='Review_Rating' id='Review_Rating-8' value='8'>
                         8
                    </option>
                    <option name='Review_Rating' id='Review_Rating-9' value='9'>
                         9
                    </option>
                    <option name='Review_Rating' id='Review_Rating-10' value='10'>
                         10
                    </option>
               </select>
          </div>
           
           <p> Content </p>
          <div id='field5-container' class='field f_100'>
               <label for='field5'>
               </label>
               <textarea rows='5' cols='20' name='Review_Content' id='field5' required='required'></textarea>
          </div>
           
           
          <div id='form-submit' class='field f_100 clearfix submit'>
               <input type='submit' value='Add Review'>
          </div>
     </form>
     </div>
        ";
    }
    
    
    
    mysqli_close($con)
    ?>

    </div>
    </div>
        <?php include("bottom.php")?>
</body>
</html>

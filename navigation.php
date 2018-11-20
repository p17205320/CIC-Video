<?php
include("connect.php");
?>
<nav id = "navi">
    <ul>
        <li class = "tooltip" Title = "Press this button to go back to the homepage"><h2><a href = "index.php">Home</a></h2>
    
            <?php

        if (isset($_COOKIE['LoggedIn'])) {
            if ($_COOKIE['LoggedIn'] == "Yes") {
             echo "<li  class = 'tooltip' Title = 'This button shows your username. You can do certain actions like logging off by using the menu. When the mouse cursor turns into a pointing finger and has no arrow that is a button you can press' style = 'width: auto; min-width: 100px; max-width: 300px'><h2>".$_SESSION['Name']." <span>&#9660</span></h2>
                <ul>";
                 $sql = "SELECT * FROM `users` WHERE Username IN ('".$_SESSION['Name']."')";
                 $result = mysqli_query($con, $sql);
	             while($row = mysqli_fetch_array($result)){
                            $admin = $row['IsAdmin'];
                            if ($admin == True) {
                                echo "<li><h4><a href ='createentry.php?Type=Film'>Add Film</a></h4></li>";
                                echo "<li><h4><a href ='createentry.php?Type=Game'>Add Game</a></h4></li>";
                            } 
 
		              }
                 
                    echo "<li><a href = 'signout.php'>Sign Out</a></li>
                </ul>
             </li>
             ";
            }
         } else {
            echo "<li class = 'tooltip' Title = 'Enter your login details below and click on the log in button to login'><h2>Login <span>&#9660</span></h2>
            
            <ul>
<form action='login.php' method='post'>
			Username 
            <br>
            <input type='text' name='username' maxlength='15' required />
            <br>
			Password 
            <br>
            <input type='password' name='password' required />
			<br>
            <br>
			<input 					type='submit' value='Log In'/>
			</form>
            </ul>
        </li>
        
        <li class = 'tooltip' Title = 'Enter your desired username and password and press Register to create an account'><h2>Register <span>&#9660</span></h2>
            <ul>
            
<form action='signedup.php' method='post'>
			Username 
            <br>
            <input type='text' name='username' maxlength='15' required />
            <br>
			Password 
            <br>
            <input type='password' name='password' required />
            <br>
            <br>
			<input type='submit' value='Register'/>
			</form>
            </ul>
               <br>
        </li>
                 

        ";
            
        }
        ?>
            <div id = "floatright">
        <li class = "tooltip"  Title = 'This button allows you to search through the movies by genre. To navigate the menu follow the arrows on the buttons and hover over the buttons. When the mouse cursor turns into a pointing finger and has no arrow that is a button you can press'><h2>Movies <span>&#9660</span></h2>
            <ul>
               <!-- <li> <h4><span>&#9668</span> Sort by Title </h4></li>
                <li> <h4><span>&#9668</span> Sort by Year  </h4></li> -->
                <li> <h4><span>&#9668</span> Sort by Genre  </h4>
                    <ul>
                            <li> <h4><span>&#9668</span> A-G  </h4>
                                <ul>
 <?php
     
	$result = mysqli_query($con, "SELECT `Genre` FROM `film_genre` WHERE Genre >= 'A' and Genre < 'H'");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Film&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> H-N  </h4>
                            <ul>
                         <?php
     
	$result = mysqli_query($con, "SELECT `Genre` FROM `film_genre` WHERE Genre >= 'H' and Genre < 'O'");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Film&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> O-U  </h4>
                            <ul>
                         <?php
     
	$result = mysqli_query($con, "SELECT `Genre` FROM `film_genre` WHERE Genre >= 'O' and Genre < 'W'");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Film&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> W-Z  </h4>
                            <ul>
<?php
     
	$result = mysqli_query($con, "SELECT `Genre` FROM `film_genre` WHERE Genre >= 'W' and Genre < 'Z'");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Film&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class = "tooltip"  Title = 'This button allows you to search through the videogames by genre and platform. To navigate the menu follow the arrows on the buttons and hover over the buttons. When the mouse cursor turns into a pointing finger and has no arrow that is a button you can press'><h2>Videogames <span>&#9660</span></h2>
            <ul>
               <!-- <li> <h4><span>&#9668</span> Sort by Title  </h4></li>
                <li> <h4><span>&#9668</span> Sort by Year  </h4></li> -->
                <li> <h4><span>&#9668</span> Sort by Genre  </h4>
                    <ul>
     
                         <li> <h4><span>&#9668</span> A-G  </h4>
                                <ul>
 <?php
                                         
	$result = mysqli_query($con, "SELECT `Genre` FROM `game_genre` WHERE Genre >= 'A' and Genre < 'H' ORDER BY `game_genre`.`Genre` ASC");                                                                
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> H-N  </h4>
                            <ul>
                         <?php
    
	$result = mysqli_query($con, "SELECT `Genre` FROM `game_genre`  WHERE Genre >= 'H' and Genre < 'P' ORDER BY `game_genre`.`Genre` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> O-U  </h4>
                            <ul>
                         <?php
     
	$result = mysqli_query($con, "SELECT `Genre` FROM `game_genre` WHERE Genre >= 'O' and Genre < 'W' ORDER BY `game_genre`.`Genre` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> W-Z  </h4>
                            <ul>
                         <?php
    
	$result = mysqli_query($con, "SELECT `Genre` FROM `game_genre` WHERE Genre >= 'W' and Genre < 'Z' ORDER BY `game_genre`.`Genre` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Genre&Genre=".$row['Genre']."'>".$row['Genre']."</a></h4></li>";
		}

?>


                    
                    </ul>
                </ul>

                </li>
                <li> <h4><span>&#9668</span> Sort by Platform  </h4>
                    <ul>
                            <li> <h4><span>&#9668</span> A-G  </h4>
                                <ul>
 <?php
                                         
	$result = mysqli_query($con, "SELECT `Platform` FROM `game_platform` WHERE Platform >= 'A' and Platform < 'H' ORDER BY `game_platform`.`Platform` ASC");                                                                
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Platform&Platform=".$row['Platform']."'>".$row['Platform']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> H-N  </h4>
                            <ul>
                         <?php
    
	$result = mysqli_query($con, "SELECT `Platform` FROM `game_platform`  WHERE Platform >= 'H' and Platform < 'P' ORDER BY `game_platform`.`Platform` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Platform&Platform=".$row['Platform']."'>".$row['Platform']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> O-U  </h4>
                            <ul>
                         <?php
     
	$result = mysqli_query($con, "SELECT `Platform` FROM `game_platform` WHERE Platform >= 'O' and Platform < 'W' ORDER BY `game_platform`.`Platform` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Platform&Platform=".$row['Platform']."'>".$row['Platform']."</a></h4></li>";
		}
 
?>
                                </ul>
                        </li>
                        <li><h4><span>&#9668</span> W-Z  </h4>
                            <ul>
                         <?php
    
	$result = mysqli_query($con, "SELECT `Platform` FROM `game_platform` WHERE Platform >= 'W' and Platform < 'Z' ORDER BY `game_platform`.`Platform` ASC");
	while($row = mysqli_fetch_array($result))
		{
		echo "<li><h4><a href ='list.php?Type=Game&SortBy=Platform&Platform=".$row['Platform']."'>".$row['Platform']."</a></h4></li>";
		}

?>
                            </ul>
                        </li>
                    </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        
    
    </ul>
    </div>
    <?php
	mysqli_close($con);
?>
    </nav>
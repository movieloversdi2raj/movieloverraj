<html>
<head>
    <meta charset="utf-8">
    <title>Internet Programming Assignment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/mainpage2_css.css" type="text/css"/>
</head>
<body>
   
    <header>
        <div id="header">
        <table>
            <tr>
                
               
                <td>
                    <ul id="menu">
                        <li>
                            <a href="IPassignment.html" target="_blank">Home</a>
                            |
                        </li>
                        <li>
                            <a href="IPassignment_page2.html" target="_blank">Movies</a>
                        </li>
                        |
                        <li>
                            <a href="IPassignment_page2.html" target="_blank">My Menu</a>
                        </li>
                    </ul>
                </td>
                <td id="logo"><img id="logo_pic" src="img/MOVIE%20LOVER%20LOGO.jpg"></td>   
            </tr>
        </table>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            
            </div>
            <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8"></div>
        
        <section id="tabs_section">
            <div class="tab">
                <button class="tablinks" id="defaultTab" onclick="openTab(event, 'First')">My Profile</button>
                <button class="tablinks" onclick="openTab(event, 'Second')">My List</button>
                <button class="tablinks" onclick="openTab(event, 'Third')">My Tickets</button>

            </div>
            </section>
            <section>
                <div id="First" class="tabcontent">
                <?php
        $userID = 1;
        include 'connection.php';
        
        $sql = "SELECT userName, email, area, fullname FROM userprofile WHERE UserID = $userID";
       // $sql5 = "SELECT userName, email, area, fullname FROM userprofile WHERE UserID = $userID";
        $result = mysqli_query($conn,$sql);
        //$result5 = mysqli_query($conn,$sql5);
        $row = mysqli_fetch_array($result);
       // $row5 = mysqli_fetch_array($result5);
    ?>
                    <div id="MyProfile">
                        <div class="row">
                                <div class="column1">
                                    <label>Full Name:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[3]?></p>
                                </div>
                            </div>
                            <hr class='style-eight'/>

                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Username:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[0]?></p>
                                </div>
                            </div>  
                            <hr class='style-eight'/>
                            
                            
                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Email:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[1]?></p>
                                </div>
                            </div>
                            
                            <hr class='style-eight'/>
                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Location:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[2]?></p>
                                </div>
                            </div>
                            <hr class='style-eight'/>
                            <div class="row">
                                    <div class="column1">
                                        <label style="font-weight:bold;">Payment:</label>
                                    </div>
                                    <br>
                                    <div class="column2">
                                        Visa
                                    </div>
                                </div>
                                <hr class='style-eight'/>
                            </div>
                            
                            
                            <div class="row" id="radio_button">
                                    <div id="cardtype_radios" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="radio" id="subs_check" name="sub_status" value="Cancel Subscription">
                                            <label style="font-weight:bold;"onclick="radio_button(this.id)">Cancel Subscription</label>
                                            
                                    </div>
                                    <div class = "change-details">
                                         <!-- Trigger/Open The Modal -->
                                         <button id="myBtn">Change personal details </button>
            
                                         <!-- The Modal -->
                                         <div id="myModal" class="modal">

                                         <!-- Modal content -->
                                        <div class="modal-content">
                                        <span class="close">&times;</span>
                                        <form action="update.php" method="POST">
                                <div class="form-group" >
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="fullname">Full Name:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text"  id="fullname" name="updatefullname" class="text_field form-control" placeholder="Full Name" onchange="input_check(this.id);checklen(this)">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="location">Location:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" id="location" name="updatelocation" class="text_field form-control" placeholder="Location" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="username">Username:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" id="username" name="updateusername" class="text_field form-control" placeholder="Username" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="email">Email:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" id="username" name="updateemail" class="text_field form-control" placeholder="Email" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="ccnumber">Credit Card Number:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" maxlength="16" id="ccnumber" name="updateccnumber" class="text_field form-control" placeholder="Credit Card Number" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="nameoncard">Name on Card:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" id="nameoncard" name="updatenoc" class="text_field form-control" placeholder="Name on Card" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                <div class="form-group">
                                        <label class="control-lable col-xs-2 col-sm-2 col-md-2 col-lg-2 lable_align" for="cvv">CVV:</label>
                                        <div class="col-xs-10 col-sm-10 ol-md-10 col-lg-10">
                                                <input type="text" id="cvv" name="updatecvv" class="text_field form-control" placeholder="CVV" onchange="input_check(this.id)">
                                        </div>
                                    </div>
                                    <br>
                                <div class="form-group form_align col-xs-12 col-sm-12 col-md-12 col-lg-12" >
                                        <button type="submit" class="btn btn-default btn-md" value="Submit">Submit</button>
                                    </div>

                                  </form>
            </div>
            </div>
                                    </div>
                                    </div>
                    
                                           
                        
                        </div>

                       
                        </section>
                        
                        
                    
                            </div>   
                        </div>
                        <div class="container">
                
              <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            
                        </div>
                        <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8"></div>
                  
               
                        <section class="Secondtab">    
      
            <div id="Second" class="tabcontent">
            
                <div class="mylistmv">
                    <div class="movielist">
                        <div class="moviedetail">
                        <?php
        $movieID = 1;
        include 'connection.php';
        
        $sql = "SELECT title, poster, releasedate,category, description FROM movies";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_all($result);
    ?>
                    <!-- <table class="mylisttb">
                        <tbody> -->
                       <?php
                           for ($r = 0; $r < count($row); $r++) {
                            echo "<div id='mblock' >";
                            echo "<table>";
                                    echo "<tr>";
                                        echo "<td>";
                                        echo "<h3>".$row[$r][0]."</h3>";
                                        echo "</td>";
                                    echo "</tr>";
                            
                                    echo "<tr>";
                                    echo "<td>";
                                    echo "<p>".$row[$r][1]."</p>";
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>";
                                echo "<p>".$row[$r][2]."</p>";
                                echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>";
                            echo "<p>".$row[$r][3]."</p>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>";
                            echo "<p>".$row[$r][4]."</p>";
                            echo "</td>";
                        echo "</tr>";
                            echo "</table>";
                            echo "</div>";
                            echo "<div style='height:3px'>";
                            echo "<hr class='style-eight'/>";
                            echo "</div>";
                        }
                        ?>


                                                </div>

                </div>
                
                            </div>
                        </section> 
                                   
                                     </div>
                                            </div>
        <div class="container">
            <section>
                
                        <div class="row">
                         <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                  
                         </div>
                        <div class="col-lg-8  col-md-8 col-sm-8 col-xs-8"></div>
                  
                <div id="Third" class="tabcontent">
                        <div>
                            <div class="orderdetail">
                            <?php
        $movieID = 1;
        include 'connection.php';
        
        $sql = "SELECT orderID, movieID, sessionID,userID, seats FROM tickets_order";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_all($result);
    ?>
                    <?php
                           for ($r = 0; $r < count($row); $r++) {
                            echo "<div id='mblock' >";
                            echo "<table>";
                                    echo "<tr>";
                                        echo "<td>";
                                        echo "<h3>".$row[$r][0]."</h3>";
                                        echo "</td>";
                                    echo "</tr>";
                            
                                    echo "<tr>";
                                    echo "<td>";
                                    echo "<p>".$row[$r][1]."</p>";
                                    echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>";
                                echo "<p>".$row[$r][2]."</p>";
                                echo "</td>";
                            echo "</tr>";

                            echo "<tr>";
                            echo "<td>";
                            echo "<p>".$row[$r][3]."</p>";
                            echo "</td>";
                        echo "</tr>";
                        echo "<tr>";
                            echo "<td>";
                            echo "<p>".$row[$r][4]."</p>";
                            echo "</td>";
                        echo "</tr>";
                            echo "</table>";
                            echo "</div>";
                            echo "<div style='height:3px'>";
                            echo "<hr class='style-eight'/>";
                            echo "</div>";
                        }
                        ?>
                                    </div>
                                    
                                                




                        </div>
            
                </div>
            </div>
        </section>  
         </div>

         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/page2.js"></script>

</body>


         <footer>
                <article>
                    <div class="container">
                        <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"></div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                          <br>
                    <p>Copyright © 2019 Movie Lover, All Rights Reserved </p></div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                    
                    </div>
        
                </article>
            </footer>
</html>
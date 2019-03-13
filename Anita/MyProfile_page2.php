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
    <div data-target=".navbar" data-offset="50">

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>  
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img id="logo_pic" src="img/logomovielover.png"></a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="MovieLoverMainPage.php">Home</a></li>
          <li><a href="MovieList.php">Movies</a></li>
          <li><a href="MovieLoverMainPage.php#section3">News</a></li>
          <li><a href="MovieLoverMainPage.php#section4">Contact Us</a></li>
</ul>

<div class="search-container">
                      <form action="/action_page.php" id="searchbox">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><img src="img/magnify.png" width=20px></i></button>
                      </form></div>                  
                </div>
              </div>
            </div></nav>
          </div>
    </header>

    <br><br>




<!-- session start-->
<?php
session_start();
if($_SESSION['userName']=='')
{
    header("location:MovieLoverMainPage.php");
}
?>  
Welcome, <?php echo $_SESSION['userName']?>

<a href="logout.php">Logout</a>

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
        
        $sql = "SELECT userName, email, area FROM userprofile WHERE UserID = $userID";
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
    ?>
                    <div id="MyProfile">
                        <div class="row">
                                <div class="column1">
                                    <label>Full Name:</label>
                                </div>
                                <br>
                                <div class="column2">
                                    Roman Fatin
                                </div>
                            </div>
                            <hr />

                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Username:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[0]?></p>
                                </div>
                            </div>  
                            <hr />
                            
                            
                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Email:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[1]?></p>
                                </div>
                            </div>
                            
                            <hr />
                            <div class="row">
                                <div class="column1">
                                    <label style="font-weight:bold;">Location:</label>
                                </div>
                                <br>
                                <div class="column2">
                                <p><?php echo $row[2]?></p>
                                </div>
                            </div>
                            <hr />
                            <div class="row">
                                    <div class="column1">
                                        <label style="font-weight:bold;">Payment:</label>
                                    </div>
                                    <br>
                                    <div class="column2">
                                        Visa
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row" id="radio_button">
                                    <div id="cardtype_radios" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                            <input type="radio" id="subs_check" name="sub_status" value="Cancel Subscription">
                                            <label style="font-weight:bold;"onclick="radio_button(this.id)">Cancel Subscription</label>
                                            
                                    </div>
                                    </div>
                    
                                    <div class="personal-info-change">
                                            <!--<span>
                                                <a data-lego="react" href="personal-info.html" tabindex="0" class="control link link_theme_normal">Change personal Information</a>
                                            </span>-->
                                        
                                            <!-- Trigger/Open The Modal -->
                                            <a id="myBtn">Change personal details </a>
            
                                            <!-- The Modal -->
                                            <div id="myModal" class="modal">
            
                                             <!-- Modal content -->
                                            <div class="modal-content">
                                             <span class="close">&times;</span>
                                             <p>Some text in the Modal..</p>
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
            <?php
        $movieID = 1;
        include 'connection.php';
        
        $sql = "SELECT title, poster, releasedate,category, description FROM movies WHERE movieID = $movieID";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);
    ?>
                <div class="mylistmv">
                    <div class="movielist">
                        <div class="moviedetail">
                    <table class="mylisttb">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="image">
                                        <a href="moviedetailslink">
                                            <div class="imagelink">
                                                <img height="200" width="140" src="linkimage">

                                            </div>
                                        </a>

                                    </div>
                                </td>
                                <td>
                                <h4 class="titleMlist">
                                    <a href="moviedetailslink" title="Movie Name"><?php 
                        echo "<h3>".$row[1]."</h3>";
                    ?></a>
                                </h4>
                                <p class="runtime-genre">
                                    <time datetime="">120min</time>
                                    <span>Genre</span>
                                </p>
                                <div class="outline">
                                <?php
                                 echo "<p>".$row[3]."</p>";
                                ?>
                                </div>
                            </td>
                                

                            </tr>
                        </tbody>
                    </table>
                        </div>
                        <div class="moviedetail">
                                <table class="mylisttb">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="image">
                                                    <a href="moviedetailslink">
                                                        <div class="imagelink">
                                                            <img height="200" width="140" src="linkimage">
            
                                                        </div>
                                                    </a>
            
                                                </div>
                                            </td>
                                            <td>
                                            <h4 class="titleMlist">
                                                <a href="moviedetailslink" title="Movie Name">Movie Name</a>
                                            </h4>
                                            <p class="runtime-genre">
                                                <time datetime="">120min</time>
                                                <span>Genre</span>
                                            </p>
                                            <div class="outline">
                                                "Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie DescriptionMovie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description "
                                            </div>
                                        </td>
                                            
            
                                        </tr>
                                    </tbody>
                                </table>
                                    </div>
                                    <div class="moviedetail">
                                            <table class="mylisttb">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="image">
                                                                <a href="moviedetailslink">
                                                                    <div class="imagelink">
                                                                        <img height="200" width="140" src="linkimage">
                        
                                                                    </div>
                                                                </a>
                        
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <h4 class="titleMlist">
                                                            <a href="moviedetailslink" title="Movie Name">Movie Name</a>
                                                        </h4>
                                                        <p class="runtime-genre">
                                                            <time datetime="">120min</time>
                                                            <span>Genre</span>
                                                        </p>
                                                        <div class="outline">
                                                            "Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie DescriptionMovie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description Movie Description "
                                                        </div>
                                                    </td>
                                                        
                        
                                                    </tr>
                                                </tbody>
                                            </table>
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
                                <table class="mylisttb">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="image">
                                                    <a href="moviedetailslink">
                                                        <div class="imagelink">
                                                            <img height="140" width="100" src="linkimage">
            
                                                        </div>
                                                    </a>
            
                                                </div>
                                            </td>
                                            <td>
                                            <h4 class="titleMlist">
                                                <a href="orderlink" title="Order Number">Order Number#1</a>
                                            </h4>
                                            <p class="orderinfo">
                                                <time datetime="">10.03.2019</time>
                                                <span>CBD</span>
                                                <br>
                                                <a href="moviepage">Movie title</a>
                                                
                                            </p>
                                            
                                        </td>
                                            
            
                                        </tr>
                                    </tbody>
                                </table>
                                    </div>
                                    <div class="orderdetail">
                                            <table class="mylisttb">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="image">
                                                                <a href="moviedetailslink">
                                                                    <div class="imagelink">
                                                                        <img height="140" width="100" src="linkimage">
                        
                                                                    </div>
                                                                </a>
                        
                                                            </div>
                                                        </td>
                                                        <td>
                                                        <h4 class="titleMlist">
                                                            <a href="orderlink" title="Order Number">Order Number #2</a>
                                                        </h4>
                                                        <p class="orderinfo">
                                                            <time datetime="">15.07.2019</time>
                                                            <span>Panmure</span>
                                                            <br>
                                                            <a href="moviepage">Movie title</a>
                                                            
                                                        </p>
                                                        
                                                    </td>
                                                        
                        
                                                    </tr>
                                                </tbody>
                                            </table>
                                                </div>
                                                <div class="orderdetail">
                                                        <table class="mylisttb">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="image">
                                                                            <a href="moviedetailslink">
                                                                                <div class="imagelink">
                                                                                    <img height="140" width="100" src="linkimage">
                                    
                                                                                </div>
                                                                            </a>
                                    
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                    <h4 class="titleMlist">
                                                                        <a href="orderlink" title="Order Number">Order Number #3</a>
                                                                    </h4>
                                                                    <p class="orderinfo">
                                                                        <time datetime="">15.07.2019</time>
                                                                        <span>Panmure</span>
                                                                        <br>
                                                                        <a href="moviepage">Movie title</a>
                                                                        
                                                                    </p>
                                                                    
                                                                </td>
                                                                    
                                    
                                                                </tr>
                                                            </tbody>
                                                        </table>
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
        <br>  
        <img src="img/socialmedia.png" width="100px">
        </div>

    </article>
            </footer>
</html>